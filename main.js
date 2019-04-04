    
document.addEventListener('DOMContentLoaded', function(e){

    let journChoice = [
        {
            'id': 0,
            'productName': 'Planteten Saturnus - 2 dec 2028' 
        },
        {
            'id': 1,            
            'productName': 'Planteten Mars - 24 aug 2019' 
        },    
        {
            'id': 2,            
            'productName': 'Planteten Jupiter - 14 apr 2031' 
        },    
        {
            'id': 3,            
            'productName': 'Planteten Pluto - 18 sept 2022' 
        }    
    ];

    let journChoice2 = document.getElementById("choosen_journ2").innerHTML;
    journChoice2 = JSON.parse(journChoice2);

    console.log(journChoice2);
    
    let tbl0 = document.getElementById("journ_choice_0");
    tbl0.addEventListener('click', function(event){ 
        let id = 0;
        let space;
        let checkbox = document.getElementById("journ_choice_0").checked;
        console.log(checkbox);
        for (let i = 0; i < journChoice.length; i++){
            if (journChoice[i]["id"] === id) {
                // journName = journChoice[i];
                // console.log(journChoice[i]['productName']);
                space = journChoice[i]['productName'];
                document.getElementById('choosen_journ').innerHTML = space;                
            };
        }
        // alert("It go home");
    });

    let tbl1 = document.getElementById("journ_choice_1");
    tbl1.addEventListener('click', function(event){ 
        let id = 1;
        let space;

        for (let i = 0; i < journChoice.length; i++){
            if (journChoice[i]["id"] === id) {
                // journName = journChoice[i];
                // console.log(journChoice[i]['productName']);
                space = journChoice[i]['productName'];
                document.getElementById('choosen_journ').innerHTML = space;
            };
         }
        // alert("It go home");
    });

    let tbl2 = document.getElementById("journ_choice_2");
    tbl2.addEventListener('click', function(event){ 
        let id = 2;
        let space;

        for (let i = 0; i < journChoice.length; i++){
            if (journChoice[i]["id"] === id) {
                // journName = journChoice[i];
                // console.log(journChoice[i]['productName']);
                space = journChoice[i]['productName'];
                document.getElementById('choosen_journ').innerHTML = space;
            };
       }
        // alert("It go home");
    });

    let tbl3 = document.getElementById("journ_choice_3");
    tbl3.addEventListener('click', function(event){ 
        let id = 3;
        let space;     
        
        for (let i = 0; i < journChoice.length; i++){
            if (journChoice[i]["id"] === id) {
                // journName = journChoice[i];
                space = journChoice[i]['productName'];
                document.getElementById('choosen_journ').innerHTML = space;
                // console.log(space);
            }
        
       

        }
        // alert("It go home");
    });
    // let journChoice = document.getElementById('journ_choice');

    // document.addEventListener('click', function(){
                 
    //     document.getElementById("choosen_journ").innerHTML = 'Choosen journey';
          
    //     console.log('choosen');
    // });

}); 