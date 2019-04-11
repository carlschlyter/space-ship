    
document.addEventListener('DOMContentLoaded', function(e){

    // let journChoice = [
    //     {
    //         'id': 0,
    //         'productName': 'Planteten Saturnus - 2 dec 2028' 
    //     },
    //     {
    //         'id': 1,            
    //         'productName': 'Planteten Mars - 24 aug 2019' 
    //     },    
    //     {
    //         'id': 2,            
    //         'productName': 'Planteten Jupiter - 14 apr 2031' 
    //     },    
    //     {
    //         'id': 3,            
    //         'productName': 'Planteten Pluto - 18 sept 2022' 
    //     }    
    // ];

    //SHOPPING CART SOLUTION

    let journChoice2 = document.getElementById("choosen_journ2").innerHTML;
    journChoice2 = JSON.parse(journChoice2);
    //console.log(journChoice2);
    //console.log(typeof(journChoice2));

    // document.getElementById('choosen_journ').innerHTML = journChoice2[0].productName;
    
    let tbl0 = document.getElementById("journ_choice_0");
    tbl0.addEventListener('click', function(event){
        let chosen_travels = [];
        document.getElementById('choosen_journ').innerHTML = '';
        for (let i = 0; i < journChoice2.length; i++) {
            let chk = document.getElementById("journ_choice_" + journChoice2[i]['ProductId']).checked;

            if (chk) {
                console.log(journChoice2[i]['productName']);
                chosen_travels.push(journChoice2[i]);
                document.getElementById('choosen_journ').innerHTML += journChoice2[i]['productName']  + '<br>'; 
            }
        }
        console.log(chosen_travels);
        for(let i = 0; i < chosen_travels.length; i++) {
            // skriv ut elementet
        }
//        console.log(checkbox);
        // if (checkbox === true) {
        //     console.log('reagerat');
        //     for (let i = 0; i < journChoice2.length; i++){
        //         if (checkbox === true) {
        //         // let text = "";
        //         // let x;
        //         // for (x in journChoice2){
        //         //     text += journChoice2[x] + " ";
        //         // }
        //         document.getElementById('choosen_journ').innerHTML = journChoice2[i].productName;
        //         } else { 
        //         console.log('not checked')
        //     }
        // };   
    //         for (let i = 0; i < journChoice2.length; i++){
    //             if (journChoice2[i]["Id"] === tbl0['Id']) {
    // //                 // journName = journChoice[i];
    // //                 // console.log(journChoice[i]['productName']);
    //                 console.log('reagerat2');
    // //                 space = journChoice2[i]['productName'];
    // //                 document.getElementById('choosen_journ').innerHTML = space; 
    //                 document.getElementById('choosen_journ').innerHTML = journChoice2[i].productName;               
    //             }
    //         };            
        });

        // alert("It go home");
    // });

    let tbl1 = document.getElementById("journ_choice_1");
    tbl1.addEventListener('click', function(event){
        let chosen_travels = []; 
        document.getElementById('choosen_journ').innerHTML = '';
        for (let i = 0; i < journChoice2.length; i++) {
            let chk = document.getElementById("journ_choice_" + journChoice2[i]['ProductId']).checked;

            if (chk) {
                console.log(journChoice2[i]['productName']);
                chosen_travels.push(journChoice2[i]);
                document.getElementById('choosen_journ').innerHTML += journChoice2[i]['productName'] + '<br>';
            }
        }
        console.log(chosen_travels);
        for(let i = 0; i < chosen_travels.length; i++) {
            // skriv ut elementet
        }

        // let id = 1;
        // let space;
        // let checkbox = document.getElementById("journ_choice_1").checked;
        // console.log(checkbox);
        // if (checkbox === true) {
        //     for (let i = 0; i < journChoice2.length; i++){
        //         if (journChoice2[i]["ProductId"] === tbl1['ProductsId']) {
        //             // journName = journChoice[i];
        //             // console.log(journChoice[i]['productName']);
        //             space = journChoice2[i]['productName'];
        //             document.getElementById('choosen_journ').innerHTML = space;
        //         };    
        //     };
        // };
        // alert("It go home");
    });

    let tbl2 = document.getElementById("journ_choice_2");
    tbl2.addEventListener('click', function(event){
        let chosen_travels = []; 
        document.getElementById('choosen_journ').innerHTML = '';
        for (let i = 0; i < journChoice2.length; i++) {
            let chk = document.getElementById("journ_choice_" + journChoice2[i]['ProductId']).checked;

            if (chk) {
                console.log(journChoice2[i]['productName']);
                chosen_travels.push(journChoice2[i]);
                document.getElementById('choosen_journ').innerHTML += journChoice2[i]['productName'] + '<br>';
            }
        }

        console.log(chosen_travels);
        for(let i = 0; i < chosen_travels.length; i++) {
            // skriv ut elementet
        }

    //     let id = 2;
    //     let space;
    //     let checkbox = document.getElementById("journ_choice_2").checked;
    //     console.log(checkbox);
    //     for (let i = 0; i < journChoice.length; i++){
    //         if (journChoice[i]["id"] === id) {
    //             // journName = journChoice[i];
    //             // console.log(journChoice[i]['productName']);
    //             space = journChoice[i]['productName'];
    //             document.getElementById('choosen_journ').innerHTML = space;
    //         };
    //    }
        // alert("It go home");
    });

    let tbl3 = document.getElementById("journ_choice_3");
    tbl3.addEventListener('click', function(event){
        let chosen_travels = [];
        document.getElementById('choosen_journ').innerHTML = ''; 
        for (let i = 0; i < journChoice2.length; i++) {
            let chk = document.getElementById("journ_choice_" + journChoice2[i]['ProductId']).checked;

            if (chk) {
                console.log(journChoice2[i]['productName']);
                chosen_travels.push(journChoice2[i]);
                document.getElementById('choosen_journ').innerHTML += journChoice2[i]['productName'] + '<br>';
            }
        }
        
        console.log(chosen_travels);
        for(let i = 0; i < chosen_travels.length; i++) {
            // skriv ut elementet
        }

        // let id = 3;
        // let space;     
        // let checkbox = document.getElementById("journ_choice_3").checked;
        // console.log(checkbox);
        // for (let i = 0; i < journChoice.length; i++){
        //     if (journChoice[i]["id"] === id) {
        //         // journName = journChoice[i];
        //         space = journChoice[i]['productName'];
        //         document.getElementById('choosen_journ').innerHTML = space;
        //         // console.log(space);
        //     }
        
       

        // }
        // alert("It go home");
    });
    // let journChoice = document.getElementById('journ_choice');

    // document.addEventListener('click', function(){
                 
    //     document.getElementById("choosen_journ").innerHTML = 'Choosen journey';
          
    //     console.log('choosen');
    // });

    //PUT SHOPPINGCART CONTENT INTO ORDER 
    let book = document.getElementById('book');
    book.addEventListener('click', function(event){
        // alert('Jag vill boka min/mina resor nu!');
        window.location.href = 'login.php';
    })  
    
}); 