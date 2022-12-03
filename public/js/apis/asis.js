
$(function(){
    $('.users').html('No data available');
    document.getElementById("export").onclick = function() { exportCSV() }; 

    function exportCSV() {
    //// export CSV
      console.log("exportCSV");
      $('#buttonTable').DataTable().button(0).trigger() ;
      
    } 

    var button_table = $('#buttonTable').DataTable({
      "ordering": false,
      "paging": false,
      
      buttons: [
          {
          extend: 'csv',
          filename: 'file_name',
          extension: '.csv'
          }
          ],
      initComplete: function() {
      
      $('.buttons-csv').hide();
    }
  });

  firebase.database().ref('/').on('value',function(snap){   
    if(snap.val().users){
      let obj= snap.val().users;
      console.log(obj);
      $('.users').html('');
      if(Object.keys(obj).length>0){
        Object.keys(obj).forEach(key=>{
          $('.users').append(`
          <div class="live">
            <img src="dist/img/checkin.png" width="150px">
            <ul>
              <li><h3>usuario: ${key}</h3></li>
              <li><img id="true${key}" width="50px" src="dist/img/tick.png"></li>
              <li><img id="false${key}" width="50px" src="dist/img/cross.png"></li>
            </ul>
          </div>
          `);
          if(obj[key]==1){
            $('#true'+key).show();
            $('#false'+key).hide();
          }else{
            $('#true'+key).hide();
            $('#false'+key).show();
          }
        })
      }
    }
    if(snap.val().attendence){
        button_table.clear().draw();

        let arr= Object.values(snap.val().attendence);
        console.log(arr);  
        arr.forEach(function(elem, i)
        {
            //console.log(table.row);
            var row= `<tr>
                <td>${elem.usuario}</td>
                <td>${elem.id}</td>
                <td>${new Date(elem.tiempo.slice(0, -1)).toLocaleString()}</td>
                <td id="state${new Date(elem.tiempo).getTime()}"></td>                
            </tr>`;
            button_table.rows.add($(row)).draw();
            if(elem.estado){
                //console.log(elem.status);
                $('#state'+new Date(elem.tiempo).getTime()).html('<span class="badge badge-success">Entrada</span>');
            }else{
                $('#state'+new Date(elem.tiempo).getTime()).html('<span class="badge badge-danger">Salida</span>');
            }
        })
      }
  })

});