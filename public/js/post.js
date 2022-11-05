console.log('public')
function deletePost(id) {
    'use strict'
                
    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
        document.getElementById(`form_${id}`).submit();
        }
    }
    
function isCheck() {
    
    let arr_checkBoxes = document.getElementsByClassName("check");
    let count = 0;
    for (let i = 0; i < arr_checkBoxes.length; i++) {
        if (arr_checkBoxes[i].checked) {
            count++;
        }
    }
    if (count  > 0 && count <=4) {
        return true;
    } else {
        window.alert("行うスポーツを1~4種類選択してください。");
        return false;
    };
 
}



