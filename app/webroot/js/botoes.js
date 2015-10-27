/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function stateBotao( num){
    alert('entrou');
    var bt1 =document.getElementById('bt1');
    var bt2= document.getElementById('bt2');
    var bt3=document.getElementById('bt3');
    var bt4=document.getElementById('bt4');
    var bt5=document.getElementById('bt5');
    switch(num){
        case 1:
          //  bt1.class="active";
            break;
        case 2: bt1.class="active";
            break;
        case 3: 
            bt1.class="active";
            bt2.class="active";
            
    }
}
