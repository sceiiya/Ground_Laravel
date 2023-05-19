$(document).ready(()=>{

    alert('flopped');

    
    const Cname = $('#cName');
    const Cmayor = $('#cMayor');
    const Ccode = $('#cPCode');

    $('#addcDetail').on('click', ()=>{

        const data = {
            'CityName': Cname.val(),
            'CityMayor': Cmayor.val(),
            'CityPostalCode': Ccode.val(),   
        }

        $.ajax({
            url: 'new-city',
            type: 'POST',
            data: data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            succes: (res)=>{
                alert(res);
            }
        })

    }
    
});

//   new-city
//   show-city
//   selectshow-city/{$slug}
//   manipulate-city/{$slug}
//   destroy-city/{$slug}
