
//load page path to selected id
function loadContent(page, id) {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {


      // updating the contenet container with the response
      document.getElementById(id).innerHTML = this.responseText;



      $('#table_livre,#table_adherant,#table_emprunt,#table_historique').DataTable({  //initialize datatable to id elements
        "paging": true,
        "ordering": true,
        // "searching": true,
        // "lengthChange": true,
        "info": true,
        "autoWidth": false,
        "drawCallback": function () {  //add styles each time table is drawn

          addPaginationStyles();

        },
        "initComplete": function () {  //add styles when table is first drawn
          searchStyles();
        },
        "language": {     //customize table language
          "search": "",
          "lengthMenu": "<div class=\"btn\">Afficher:</div> _MENU_ éléments par page"
        }
      });





    }
  };


  //getting the php response from server
  xmlhttp.open("GET", page, true);
  xmlhttp.send();






}


//add page path to selected id
function addContent(page, id) {


  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // updating the contenet container with the response
      document.getElementById(id).insertAdjacentHTML('afterend', this.responseText);

    }
  };
  //getting the php response from server
  var elem = document.getElementById(id);

  elem.style.filter = 'blur(3px)';  //apply bg blur

  xmlhttp.open("GET", page, true);
  xmlhttp.send();


}


//removes id from top of id2 (usually #content)
function removeContentFrom(id, id2) {
  console.log('remove called');


  if (document.querySelector(id)) {
    var elem = document.querySelector(id);
    console.log(elem);
    elem.remove();
    var elem2 = document.querySelector(id2);


    elem2.style.filter = 'blur(0px)';
  }
  else {
    var elem2 = document.querySelector(id2);
    elem2.style.filter = 'blur(0px)';


  }






}


// function to handle form submit
$(document).ready(function () {
  $('.row').on('submit', '#ajout_livre, #ajout_adherant, #modif_livre, #modif_adherant, #suppr_livre, #suppr_adherant,#ajout_emprunt,#suppr_emprunt,#rendr_livre,#modif_emprunt', function (event) {

    event.preventDefault();
    var id = '#' + $(this).attr('id');  // id of submitted form 



    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),  //form action url
      data: $(this).serialize(),  //data to be sent to php file and retrieved
      encode: true,
      success: function (response) {


        console.log('response nbr emprunts:');
        console.log(response);


        removeContentFrom(id, '#content');
        addContent('../PHP/success_message.php', 'content');

        if (document.querySelector('#table_livre')) loadContent('../PHP/list_livre.php', 'content');    // recharge le contenu des tableau pour chacun
        else if (document.querySelector('#table_adherant')) loadContent('../PHP/list_adherant.php', 'content');
        else if (document.querySelector('#table_emprunt')) loadContent('../PHP/list_emprunt.php', 'content');
        else if (document.querySelector('#table_historique')) loadContent('../PHP/historique_emprunt.php', 'content');
        console.log('content reloaded');




      }, error: function (response) {
        console.log('nbr emprutns:', response);
        removeContentFrom(id, '#content');
        addContent('../PHP/error_message.php', 'content');

      }

    });

  })
});








//show elem a modifer in input field
async function showModifiableElement(elem, id) {
  var tableRow = elem.parentNode.parentNode.querySelectorAll('td');

  var form = await waitForElement(id);  //waits for element to exist


  //collect input fields and select fields if they exist
  var input = document.getElementById(id).querySelectorAll('input.form-control,select.form-select ');


  for (let i = 0; i < input.length; i++) {

    if (input[i].tagName == 'SELECT') {   // change select element to corresponding option 
      for (let j = 0; j < input[i].length; j++) {


        if (input[i][j].textContent == tableRow[i].textContent) {
          input[i].value = input[i][j].value;

        }

      };

      continue;

    }
    input[i].value = tableRow[i].textContent;


  }

}


async function appendOptions() {
  $('#ajouter_emprunt').on('submit', function (event) {

    event.preventDefault();
    var id = '#' + $(this).attr('id');  // id of submitted form 



    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),  //form action url
      data: $(this).serialize(),  //data to be sent to php file and retrieved
      encode: true,
      success: function (response) {
        console.log('response:');
        console.log(response);


        removeContentFrom(id, '#content');
        addContent('../PHP/success_message.php', 'content');





      }
    })
  }
  )
}







//collect id elem for deletion
async function collectIDLivre(elem) {

  var tableRow = elem.parentNode.parentNode.querySelectorAll('td');
  var form = await waitForElement('suppr_livre');  //waits for element to exist
  var input = document.getElementById('suppr_livre').querySelectorAll('input');
  input[0].value = tableRow[0].textContent;
}


//collect id elem for deletion
async function collectIDadherant(elem) {

  var tableRow = elem.parentNode.parentNode.querySelectorAll('td');
  var form = await waitForElement('suppr_adherant');  //waits for element to exist
  var input = document.getElementById('suppr_adherant').querySelectorAll('input');
  input[0].value = tableRow[0].textContent;
}


//collect id elem for deletion
async function collectIDemprunt(elem) {

  var tableRow = elem.parentNode.parentNode.querySelectorAll('td');
  var form = await waitForElement('rendr_livre');  //waits for element to exist
  var input = document.getElementById('rendr_livre').querySelectorAll('input');
  input[0].value = tableRow[0].textContent;


}


//wait for id elem to appear in dom
async function waitForElement(id) {  //async to allow use of await
  while (!document.getElementById(id)) {
    await new Promise((resolve) => setTimeout(resolve, 10)); //wait for promise that resolves after timeout 
  }
  return document.getElementById(id);

}




function addPaginationStyles() { // add styles to pagination elem

  $('#DataTables_Table_0_previous, #DataTables_Table_0_next, .paginate_button.current, .paginate_button').addClass('page-link').wrap('<li class="page-item "></li>');
  $('#DataTables_Table_0_previous, #DataTables_Table_0_next, .paginate_button.current, .paginate_button ').parent('li').wrapAll('<ul class="pagination justify-content-center"></ul>')

}



function searchStyles() { //add styles to search and length functions
  $('.dataTables_filter').wrap('<form  role="search"></form>');
  $('.dataTables_length select').addClass('btn ').addClass('btn-secondary');
  $('#table_livre_filter').find('label').contents().unwrap();
  $('.dataTables_filter input').addClass('form-control search').attr('placeholder', 'recherche...');


  $('.dataTables_length,.dataTables_filter').wrapAll(`<div class="container-fluid ">
                                                      <nav  class="navbar bg-body-tertiary mt-4 mb-4">
                                                      <div class="container-sm" id="searchbar">
                                                      </div> 
                                                      </nav>
                                                      </div>`);
}








