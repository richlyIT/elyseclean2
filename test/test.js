var serviceType = document.getElementById('serviceType').value;
var getServiceType = document.getElementById('serviceType');
var test = document.getElementById('frequency').style;
var getFrequencyValue = document.getElementById('frequency');
//test.display = 'none';
console.log(test);

function deleteFrequency(){
    var serviceType = document.getElementById('serviceType').value;
    if(serviceType != 1){
        test.display = 'none';
    }else if(serviceType == 1){
        test.display='block';
        //getFrequencyValue.innerHTML += "One Time";
    }else{
        console.log(error);
    }
}
