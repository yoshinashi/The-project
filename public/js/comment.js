$(function() {
    splits=location.pathname.split('/');


    console.log(splits)


    console.log(splits)

   
    const user=splits[2];
    console.log(user);
    get_data(user);
});

function get_data(user) {
    $.ajax({

        url: `/result/ajax/${user}`,

        dataType: "json",
        success: data => {
            $("#comment-data")
                .find(".comment-visible")
                .remove();

            for (var i = 0; i < data.comments.length; i++) {
                var html = `
                            <div class="media comment-visible">
                                <div class="media-body comment-body">
                                    <div class="row">
                                        <span class="comment-body-time" id="created_at">${data.comments[i].created_at}</span>
                                    </div>
                                    <span class="comment-body-content" id="comment">${data.comments[i].comment}</span>
                                </div>
                            </div>
                        `;

                $("#comment-data").append(html);
            }
        },
        error: () => {
            alert("ajax Error");
            
            console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        　　console.log("textStatus     : " + textStatus);
        　　console.log("errorThrown    : " + errorThrown.message);
         }
    });

    setTimeout(() => get_data(user), 5000);
}