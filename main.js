    
console.log(document.cookie);

document.addEventListener('DOMContentLoaded', function(e){

    //SHOPPING CART SOLUTION

    let journChoice2 = document.getElementById("choosen_journ2").innerHTML;
    journChoice2 = JSON.parse(journChoice2);
    console.log(journChoice2);
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

        let journCkie;
        document.getElementById("book").addEventListener('click', function(ev) {
            journCkie = document.cookie = 'chosen_travels=' + JSON.stringify(chosen_travels);
            // alert('Cookie set');
            location.reload();
            window.location.href = 'login.php';
            
        });
        
    });

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


        document.getElementById("book").addEventListener('click', function(ev) {
            document.cookie = 'chosen_travels=' + JSON.stringify(chosen_travels);
            // alert('Cookie set');
            location.reload();
            window.location.href = 'login.php';
        });

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

        document.getElementById("book").addEventListener('click', function(ev) {
            document.cookie = 'chosen_travels=' + JSON.stringify(chosen_travels);
            // alert('Cookie set');
            location.reload();
            window.location.href = 'login.php';
        });

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

        document.getElementById("book").addEventListener('click', function(ev) {
            document.cookie = 'chosen_travels=' + JSON.stringify(chosen_travels);
            // alert('Cookie set');
            location.reload();
            window.location.href = 'login.php';
        });

    });
    
}); 