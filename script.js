let menu= document.querySelector('#menu-btn');
let navbar=document.querySelector('.navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times')
    navbar.classList.toggle('active')
};

window.onscroll=()=>{
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')
};

var swiper=new Swiper(".home-slider",{
    loop:true,
    
    navigation:{
        nextE1:".swiper-button-next",
        prevE1:".swiper-button-prev",
    },
});
/*var swiper=new Swiper(".reviews-slider",{

    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints:{
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
            
        },
        1024:{
            slidesPerView:3,
           
        },

    },
})*/

let loadmorebtn=document.querySelector('#load');
let currentItem=3;
loadmorebtn.onclick=()=>{
    let boxes=[document.querySelectorAll('.home-packages.box-container3.box3')];
    for(var i=currentItem;i<currentItem+3;i++)
    {
        boxes[i].style.display='inline-block';
    };
    currentItem +=3;
    if(currentItem>=boxes.length)
    {
        loadmorebtn.style.display='none';
    }
}

function myfun()
        {
            var a= document.getElementById("phone").value;
            if(a=="")
            {
                document.getElementById("messages").innerHTML="please fill mobile no";
                

            }
            else if(isNaN(a))
            {
                document.getElementById("messages").innerHTML="Only numbers are allowed";
               
            }
            else if(a.length<10 || a.length>10)
            {
                document.getElementById("messages").innerHTML="Invalid mobile no";
                
            }
            else
            {
                document.getElementById("messages").innerHTML="";
            }
        }

        function myid()
        {
            var d=document.getElementById("email").value;
            if(d.indexOf('@')<=0 || ((d.charAt(d.length-4)!='.') && (d.charAt(d.length-3)!='.')))
            {
                document.getElementById("mailid").innerHTML="Invalid Email Id";
            }
            else if(d=="")
            {
                document.getElementById("mailid").innerHTML="please fill email";
            }
           
            else
            {
                document.getElementById("mailid").innerHTML="";
            }
            
        }

        function myfun1()
        {
            var g= document.getElementById("guest").value;
            if(g=="")
            {
                //document.getElementById("guestmsg").innerHTML="please fill the no of guests";
            
                alert("please fill the no of guests" ); 
                window.location.href = "book1.php";
               
                

            }
            else if(isNaN(g))
            {
                //document.getElementById("guestmsg").innerHTML="Only numbers are allowed";
                alert("Only numbers are allowed" ); 
                window.location.href = "book1.php";
               
            }
            else if(g>2)
            {
                //document.getElementById("guestmsg").innerHTML="Sorry,Only 2 members are allowed,You can plan the next trip";
                alert("Sorry,Only 2 members are allowed,You can plan the next trip" ); 
                window.location.href = "package.html";
            }
            else
            {
                document.getElementById("guestmsg").innerHTML="";
            }
        }
