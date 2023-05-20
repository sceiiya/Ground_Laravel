const Cuid = $('#cUID');
const Cname = $('#cName');
const Cmayor = $('#cMayor');
const Ccode = $('#cPCode');

$(document).ready(()=>{
    
    $('#addcDetail').on('click', ()=>{

        if(Cname.val() != '' && Cmayor.val() != '' && Ccode.val()  != '' && Ccode.val() <= 9999 && Ccode.val() >= 1000){

            if($('.theButton').text()=='Add Data'){
                console.log('add ?');
                const data = {
                    'CityName': Cname.val(),
                    'CityMayor': Cmayor.val(),
                    'CityPostalCode': Ccode.val(),
                }
        
                $.ajax({
                    url: 'api/new-city',
                    type: 'POST',
                    data: data,
                    beforeSend: ()=>{$('.theButton').text('Loading. . . do not click!');},
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                    success: (res)=>{
                        console.log(res);
                        fetchCity();
                    }
                });
            }else{
                console.log('update?');
                const data = {
                    'Uniqueid': Cuid.val(),
                    'CityName': Cname.val(),
                    'CityMayor': Cmayor.val(),
                    'CityPostalCode': Ccode.val(),
                }
        
                $.ajax({
                    url: '/api/manipulate-city',
                    type: 'POST',
                    beforeSend: ()=>{$('.theButton').text('Updating. . . Please wait!');},
                    data: data,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                    success: (res)=>{
                        fetchCity();
                    }
                });
            }
        }else{
            alert('FILL IT UP! make sure Postal Code only 4 digit');
        }

    });
    
});

// fetch function
const fetchCity = ()=>{
    $.ajax({
        url: 'api/show-city',
        type: 'GET',
        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        success: (res)=>{
            // console.log(res);
            const resData = JSON.parse(res);
            let showCities = `<table class="table-fixed w-full"><thead>
            <tr>
            <th style='display: none;'>UID</td>
            <th>City</td>
            <th>Mayor</td>
            <th>Postal Code</td>
            <th>Action</td>
            </tr>
            </thead>
            <tbody>`;
            resData.result.map( data => 
                showCities +=
                `
                <tr>
                <td style='display: none;' class='iUID'>${data.Uniqueid}</td>
                <td>${data.CityName}</td>
                <td>${data.CityMayor}</td>
                <td>${data.CityPostalCode}</td>
                <td><button class='edit'>Edit</button class='bg-amber-400 rounded-2xl'>&nbsp&nbsp&nbsp<button class='delete bg-red-400 rounded-2xl'>Delete</button></td>
                </tr>
                `
                
                );



            showCities += '</tbody></table>';
            $('#dataField').html(showCities);
            $('.theButton').text('Add Data');
            Cname.val('');
            Cmayor.val('');
            Ccode.val('');


            function FetchEdit(UID){
                console.log(UID);

                const Cuid = $('#cUID');
                const Cname = $('#cName');
                const Cmayor = $('#cMayor');
                const Ccode = $('#cPCode');

                $.ajax({
                    url: `api/show-city/${UID}`,
                    type: 'GET',
                    data: UID,
                    beforeSend: ()=>{
                        Cname.val('Loading...');
                        Cmayor.val('Loading...');
                        Ccode.val(0000);
                        $('.theButton').text('Fetching. . . Data. . .');
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                    success: (res)=>{
                        const resData = JSON.parse(res);
                        // console.log('res is:'+res);
                        // console.log('resData is:'+res.result);

                        resData.result.map( (data) => {
            
                        Cuid.val(data.Uniqueid);
                        Cname.val(data.CityName);
                        Cmayor.val(data.CityMayor);
                        Ccode.val(data.CityPostalCode);
                        });
                        $('.theButton').text('Update Data');
                    }
                });
            }

            $(document).ready(function() {
              $('.edit').on('click', function() {
                // console.log('edit');
                const cUIDVal = $(this).closest('tr').find('.iUID').text();
                // console.log('edit is ' + cUIDVal);
                FetchEdit(cUIDVal);
              });
            });


            function deleteCity(UID){
                console.log(UID);

                const Cuid = $('#cUID');

                $.ajax({
                    url: `/api/destroy-city/${UID}`,
                    type: 'GET',
                    data: UID,
                    beforeSend: ()=>{
                        Cname.val('Loading...');
                        Cmayor.val('Loading...');
                        Ccode.val(0000);
                        $('.theButton').text('Deleting. . . Please wait!');
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                    success: (res)=>{
                        alert('delete succes');
                        fetchCity();
                    }
                });
            }

            $(document).ready(function() {
                $('.delete').on('click', function() {
                  // console.log('edit');
                  const cUIDVal = $(this).closest('tr').find('.iUID').text();
                  // console.log('edit is ' + cUIDVal);
                  deleteCity(cUIDVal);
                });
              });


        }
    });
}

fetchCity();


// $(document).ready(()=>{
//     $('.SaveEdit').on('click', (this)=>{
//         saveEdit(this);
//     });
// });

$(document).ready(()=>{
    const  saveEdit = ()=>{
        const data = {     
            'Uniqueid': Cuid.val(),
            'CityName': Cname.val(),
            'CityMayor': Cmayor.val(),
            'CityPostalCode': Ccode.val(),   
        }
        
        $.ajax({
            url: 'api/manipulate-city',
            type: 'POST',
            data: data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            success: (res)=>{
                alert(res);
                fetchCity();
            }
        });
    };
});


//   new-city
//   show-city
//   selectshow-city/{$slug}
//   manipulate-city/{$slug}
//   destroy-city/{$slug}
