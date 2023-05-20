const copyText = $('.endPoint');
    copyText.on('click', (event) => {
    const toCopy = $(event.target).text();
    navigator.clipboard.writeText(toCopy);
})

// const putReqSamp ={
//     "$.ajax": {
//       "url": "api/selectshow-city/${UID}",
//       "type": "GET",
//       "data": "UID",
//       "headers": { "X-CSRF-TOKEN": "$('meta[name=_token]').attr('content')" }
//     }
//   };
const showSamp = {"code":200,"status":"ok","result":[{"id":"00000000001","Uniqueid":"8c610f93f6ec11ed","CityName":"Manila 1","CityPostalCode":"9090","CityMayor":"Maoyr 1"},{"id":"00000000002","Uniqueid":"42c498edf6ed11ed","CityName":"Manila 2","CityPostalCode":"8080","CityMayor":"Mayora 2"}]};
const IshowSamp = {"code":200,"status":"ok","result":[{"id":"00000000001","Uniqueid":"8c610f93f6ec11ed","CityName":"Manila 1","CityPostalCode":"9090","CityMayor":"Maoyr 1"}]};
const putSamp = {"code":300,"status":"null","result":"Record added successfully"};
const updateSamp = {"code":300,"status":"null","result":"Cant find record to delete"};
const destroySamp = {"code":200,"status":"null","result":"deleted"};


// api/selectshow-city/{UID}

    // const puReqCon = document.getElementById('putSamP');
    // puReqCon.textContent = JSON.stringify(putReqSamp, null, 2);
    // hljs.highlightElement(puReqCon);

    const jputSampCon = document.getElementById('putsamP');
    jputSampCon.textContent = JSON.stringify(putSamp, null, 2);
    hljs.highlightElement(jputSampCon);

    const upSampCon = document.getElementById('upsamP');
    upSampCon.textContent = JSON.stringify(updateSamp, null, 2);
    hljs.highlightElement(upSampCon);

    const putDelCon = document.getElementById('delsamP');
    putDelCon.textContent = JSON.stringify(destroySamp, null, 2);
    hljs.highlightElement(putDelCon);

    const showDelCon = document.getElementById('showsamP');
    showDelCon.textContent = JSON.stringify(showSamp, null, 2);
    hljs.highlightElement(showDelCon);

    const ishowCon = document.getElementById('IshowsamP');
    ishowCon.textContent = JSON.stringify(IshowSamp, null, 2);
    hljs.highlightElement(ishowCon);



    