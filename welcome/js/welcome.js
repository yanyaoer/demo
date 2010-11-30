function showUser() {
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp == null) {
        alert("Your browser does not support AJAX!");
        return;
    }
    var url = "welcome.do";
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("POST", url, true);
    xmlHttp.send(null);
    setTimeout("showUser()", "3000");
}
function stateChanged() {
    if (xmlHttp.readyState == 4) {
        var xmlDoc = xmlHttp.responseXML;
        var vipList = xmlDoc.getElementsByTagName("vip");
        var outputStr = document.createElement('ul');
        if (vipList.length > 0) {
            for (var i = 0; i < vipList.length; i++) {
                var user = vipList[i];
                var username = user.childNodes[0].textContent;
                var company = user.childNodes[1].textContent;
                var titleName = user.childNodes[2].textContent;
                var arriveTime = user.childNodes[3].textContent;
                var currentTime = user.childNodes[4].textContent;
                outputStr.innerHTML += "<li class=\"vip\">欢迎<span class=\"info\"><strong class=\"name\">" + username + "</strong>" + company + "<span class=\"honor\">" + titleName + "</span></span><small>初次来访: "+arriveTime+"<br />最近来访::"+currentTime+"</small></li>"
            }
            // document.getElementById("marquee").innerHTML = outputStr;
	    $(outputStr).css('display','none');
	    var mar = $('#marquee');
		$(outputStr).insertAfter(mar);
		mar.remove();
	    $(outputStr).attr('id','marquee').css('display','');
            $('#marquee').fadeIterator({limit:3,speed:2000});
        }
        var jiabinList = xmlDoc.getElementsByTagName("jiabin");
        if (jiabinList.length > 0) {
             var tBody =document.getElementById("jiabinTbody");
            tBody.innerHTML = "";
            for (var j = 0; j < jiabinList.length; j++) {
                var jiabin = jiabinList[j];
                var tr1 = document.createElement('tr');
                var td1 = document.createElement('td');
                td1.innerHTML = jiabin.childNodes[0].textContent;
                tr1.appendChild(td1);
                var td2 = document.createElement('td');
                td2.innerHTML = jiabin.childNodes[1].textContent;
                tr1.appendChild(td2);
                var td3 = document.createElement('td');
                td3.innerHTML = jiabin.childNodes[2].textContent;
                tr1.appendChild(td3);
                var td4 = document.createElement('td');
                td4.innerHTML = jiabin.childNodes[3].textContent;
                 var td5 = document.createElement('td');
		 td4.className='time';
		 td5.className='time';
                td5.innerHTML = jiabin.childNodes[4].textContent;
                tr1.appendChild(td4);
                tr1.appendChild(td5);
                tBody.appendChild(tr1);
            }
        }

        var main_show = xmlDoc.getElementsByTagName("main_show");
         if (main_show != undefined) {
            var vipUser = main_show[0];
             if (vipUser != undefined) {
                document.getElementById("vipName").innerHTML = vipUser.childNodes[0].textContent;
                document.getElementById("vipCompany").innerHTML = vipUser.childNodes[1].textContent;
                document.getElementById("titleName").innerHTML = vipUser.childNodes[2].textContent;
            }
        }
        document.getElementById("user_count").innerHTML = xmlDoc.getElementsByTagName("user_count")[0].childNodes[0].textContent;
        document.getElementById("company_count").innerHTML = xmlDoc.getElementsByTagName("company_count")[0].childNodes[0].textContent;
    }
}

function remove(tBody) {
    var count = tBody.rows.length;
    for (var i = 1; i < count; i++) {
        tBody.deleteRow(i);
    }

}

function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    }
    catch (e) {
        // Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}


