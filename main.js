$(".btnedit").click(e=>{
    let textvalue= displayData(e);

    let id = $("input[name*='id']");
    let uname = $("input[name*='uname']");
    let dept = $("input[name*='dept']");
    let year = $("input[name*='year']");
    let room_no = $("input[name*='room_no']");

    id.val(textvalue[0]);
    uname.val(textvalue[1]);
    dept.val(textvalue[2]);
    year.val(textvalue[3]);
    room_no.val(textvalue[4]);
});

function displayData(e) {
    let id=0;
    const td = $('#items tr td');
    let textvalue=[];

    for(const value of td){
        if(value.dataset.id == e.target.dataset.id){
        textvalue[id++]=value.textContent;
    }
}
return textvalue;
}
