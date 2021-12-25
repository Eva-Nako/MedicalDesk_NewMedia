function custom_template(obj) {
    var data = $(obj.element).data();
    var text = $(obj.element).text();
    if (data && data['img_src']) {
        img_src = data['img_src'];
        template = $("<div style=\"display:flex;gap:20px;align-items:center; justify-content:flex-start;\"><img src=\"" + img_src + "\" style=\"width:25%; bottom:3px;height:40px;\"/><p class=\"hidden_flag\" style=\"font-weight: 700;font-size:14px;\">" + text + "</p></div>");
        return template;
    }
}
var options = {
    'templateSelection': custom_template,
    'templateResult': custom_template,
}
$('#id_select2_example').select2(options);
$('.select2-container--default .select2-selection--single').css({ 'height': '40px' });


//color function
function colorChange() {

    var active = document.getElementById('active');
    var selectList = document.getElementById('selectValue');
    if (selectList.value > 0) {
        active.className = 'active';

    } else {
        active.className = 'inactive';

    }
}

// function colorChangee() {
//     var active1 = document.getElementById('active1');
//     var selectList1 = document.getElementById('selectValue1');
//     if (selectList1.value > 0) {
//         active1.className = 'active';
//     } else
//         active1.className = 'inactive';

// }

//select function
function ddlselect() {

    var d = document.getElementById('ddselect');
    var displaytext = d.options[d.selectedIndex].text;
    document.getElementById('txtvalue').value = displaytext;

}

// function colorChange(event) {
//     var active = event.target;
//     // var active = document.getElementById('active');
//     var selectList = document.getElementById('selectValue');
//     if (selectList.value > 0) {
//         active.className = 'active';

//     } else {
//         active.className = 'inactive';

//     }
// }
// document.addEventListener('click', function(event) {
//     if (event.target.classList.contains('js_changecolor')) {
//         var active = event.target;

//         if (active.selectedValue > 0) {
//             active.classList.add('active')
//             active.classList.remove('inactive');

//         } else {
//             active.classList.remove('active')
//             active.classList.add('inactive');

//         }
//     }
// })