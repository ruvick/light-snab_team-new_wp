const filterParamLoad = document.location.protocol+'//'+document.location.host+'/wp-json/gensvet/v2/get_filter'

function chengeSort(param) {
    sortFormFilter.value = param;
    categoryFilterForm.submit();
}

function clearFilter() {
    document.location.href = document.location.protocol+'//'+document.location.host+document.location.pathname
}

function getRequests() {
    var s1 = location.search.substring(1, location.search.length).split('&'),
        r = {}, s2, i;
    for (i = 0; i < s1.length; i += 1) {
        s2 = s1[i].split('=');
        let arrayIndex = decodeURIComponent(s2[0]).toLowerCase();
        if (arrayIndex.indexOf('[') == -1)
            {
                r[arrayIndex] = decodeURIComponent(s2[1]);
            } else {
                arrayIndex = arrayIndex.substring(0, arrayIndex.indexOf('['));
                if (typeof r[arrayIndex] === 'object')
                    r[arrayIndex].push(decodeURIComponent(s2[1]).replaceAll('+', ' '))
                else 
                    r[arrayIndex] = [decodeURIComponent(s2[1]).replaceAll('+', ' ')]
            }
    }
    return r;
};

function get_color_name(color) { 
    if ( color == '#000000') return "Черный";
	if ( color == '#EC1C24') return "Красный";
	if ( color == '#39B44A')  return "Зеленый";
	if ( color == '#7d0000')  return "Бордовый";
	if ( color == '##00ADEE')  return "Синий";
	if ( color == '#FFFF00')  return "Желтый";
	if ( color == '#6f00cc')  return "Фиолетовый";
	if ( color == '#D9A52A')  return "Золотой";
	if ( color == '#C0C0C0')  return "Серебристый";

    return ""
}

document.addEventListener("DOMContentLoaded", () => {

    let qParam = getRequests();

    if (qParam.sort == "price_ub")  {
        price_ub.checked  = true;
    }

    if (qParam.sort == "price_vozr")  {
        price_vozr.checked  = true;
    }

    

    if (document.getElementById('tovarCategoryId') == null) return;
    
    let category = tovarCategoryId.dataset.id;
    
    console.log(category);

    const xhr = new XMLHttpRequest()

    xhr.open('GET', filterParamLoad+"?catid="+category)
    xhr.responseType='json'
    xhr.setRequestHeader('Content-Type', 'application/json')

    xhr.onload = () => {
        console.log(xhr.response);
        
        // Материал
        let uStr = ""
        xhr.response.offer_material.forEach((element, index) => {
            
            let checed = (qParam.material != undefined && qParam.material.includes(element) )?"checked":"";

            uStr += '<label for="material_'+index+'" class="checkbox checkbox_label">'+
                        '<input id="material_'+index+'" '+checed+' class="checkbox__input" type="checkbox" value="'+element+'" name="material[]">'+
                        '<span class="checkbox__text"><span>'+element+'</label>';

        });
        if (document.getElementById("material_filter_wrapper")) material_filter_wrapper.innerHTML = uStr;
        
        // Цоколь
        uStr = ""
        xhr.response.offer_tsokol.forEach((element, index) => {
            
            let checed = (qParam.tsokol != undefined && qParam.tsokol.includes(element) )?"checked":"";

            uStr += '<label for="tsokol_'+index+'" class="checkbox checkbox_label">'+
                        '<input id="tsokol_'+index+'" '+checed+' class="checkbox__input" type="checkbox" value="'+element+'" name="tsokol[]">'+
                        '<span class="checkbox__text"><span>'+element+'</label>';

        });
        if (document.getElementById("tsokol_filter_wrapper")) tsokol_filter_wrapper.innerHTML = uStr;
        
        // Количество ламп
        uStr = ""
        xhr.response.offer_lamp_count.forEach((element, index) => {
            
            let checed = (qParam.lamp_count != undefined && qParam.lamp_count.includes(element) )?"checked":"";

            uStr += '<label for="lamp_count'+index+'" class="checkbox checkbox_label">'+
                        '<input id="lamp_count'+index+'" '+checed+' class="checkbox__input" type="checkbox" value="'+element+'" name="lamp_count[]">'+
                        '<span class="checkbox__text"><span>'+element+'</label>';

        });
        if (document.getElementById("lamp_count_filter_wrapper")) lamp_count_filter_wrapper.innerHTML = uStr;
        
        // Размер
        uStr = ""
        xhr.response.offer_size.forEach((element, index) => {
            
            let checed = (qParam.size != undefined && qParam.size.includes(element) )?"checked":"";

            uStr += '<label for="size'+index+'" class="checkbox checkbox_label">'+
                        '<input id="size'+index+'" '+checed+' class="checkbox__input" type="checkbox" value="'+element+'" name="size[]">'+
                        '<span class="checkbox__text"><span>'+element+'</label>';

        });
        if (document.getElementById("size_filter_wrapper")) size_filter_wrapper.innerHTML = uStr;

        // Дизайнер
        uStr = ""
        xhr.response.offer_designer.forEach((element, index) => {
            
            let checed = (qParam.designer != undefined && qParam.designer.includes(element) )?"checked":"";

            uStr += '<label for="designer'+index+'" class="checkbox checkbox_label">'+
                        '<input id="designer'+index+'" '+checed+' class="checkbox__input" type="checkbox" value="'+element+'" name="designer[]">'+
                        '<span class="checkbox__text"><span>'+element+'</label>';

        });
        if (document.getElementById("designer_filter_wrapper")) designer_filter_wrapper.innerHTML = uStr;

        
    
        // if (document.getElementById("filterVidRisWrapper")) filterVidRisWrapper.innerHTML = uStr3;
        // if (document.getElementById("filterVidRisWrapper_main")) filterVidRisWrapper_main.innerHTML = mainPage2;


        // // check_nal.checked  = (qParam.nal == undefined)?false:true;
        
        // if (document.getElementById("price_ot")) price_ot.value = (qParam.price_ot == undefined)?xhr.response.offer_price_min:qParam.price_ot;
        // if (document.getElementById("price_do")) price_do.value = (qParam.price_do == undefined)?xhr.response.offer_price_max:qParam.price_do;


        if (document.getElementById("categoryFilterLoader")) categoryFilterLoader.style.display = "none";
        if (document.getElementById("categoryFilterForm")) categoryFilterForm.style.display = "block";

        // let selects = document.getElementsByTagName('select');
        // if (selects.length > 0) {
        //   selects_init(selects);
        // }

    }

    xhr.send();

});