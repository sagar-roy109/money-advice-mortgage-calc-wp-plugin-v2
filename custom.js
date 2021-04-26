// Jquery 


(function($) {
$(document).ready(function() {
    
   jQuery('.tab').on('click', function() {
  
    jQuery(this).siblings('.tab').removeClass('active').end().addClass('active');
         
        var selectContent = this.getAttribute('data-toggle-target');
         
        jQuery('.tab-content').removeClass('active').filter(selectContent).addClass('active');


        return false;
      });
    

})


})(jQuery);








//  Get elements

//inputs
const upperPropertyPrice = document.getElementById('propertyPriceUpper');
const lowerPropertyPrice = document.getElementById('propertyPriceLower');
const upperAvailableDeposit = document.getElementById('availableDepositUpper');
const lowerAvailableDeposit = document.getElementById('availableDepositLower');
const mortgageTerm = document.getElementById('mortgageTerm');
const moneyAdviceinterestRate = document.getElementById ('interestRate');

// Texts
const nextButton = document.getElementById('calculatorNext');
const upperNotice = document.getElementById('calculatorUpperNotice');





// Allow only Integer Number On Inputs

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}






// Property Upper 

upperPropertyPrice.addEventListener('input', function(){
    nextButtonTrigger();
    maximumValueCheck();
})

// Available Deposit Upper

upperAvailableDeposit.addEventListener('input', function(){
    nextButtonTrigger();
    showUpperNotice();
    maximumValueCheck();
})


// upper notice

function showUpperNotice(){
    if(upperAvailableDeposit.value !== ""){
        upperNotice.style.display = "block";
    }else{
        upperNotice.style.display = "none";
    }
}

// Value Check

function maximumValueCheck(){
    if(+upperAvailableDeposit.value > +upperPropertyPrice.value ){
        alert(' Deposit Amout must be less then property value');
        nextButton.classList.add('disabled');
    }
}










nextButton.classList.add('disabled');

let count = 0;

function nextButtonTrigger(){

    if (upperPropertyPrice.value == '' || upperAvailableDeposit.value == ''){
        nextButton.classList.add('disabled');
    } 
    else {
        nextButton.classList.remove('disabled'); 
        
        nextButton.addEventListener('click', function () {
            
            if(count == 0 ){


                let upperProperty = upperPropertyPrice.value;
                let upperDeposit = upperAvailableDeposit.value;
                lowerPropertyPrice.value = upperProperty;
                lowerAvailableDeposit.value = upperDeposit;
                document.getElementById('upperContent').style.display = 'none';
                document.getElementById('lowerContent').style.display = 'block';
                
                calculate();
    
                var termRangeSlider = new rSlider({
                    target: '#termRange',
                    values: {
                        min: 5,
                        max: 40,
                    },
                    scale: false,
                    labels: false,
                    step: 1,
                    range: false,
                    onChange : function(termData){
                       mortgageTerm.value = termData;
                       calculate();
                    },
                    set: [25],
                    
                });


                var interestRangeSlider = new rSlider({
                    target: '#interestRange',
                    values: {
                        min: 0.25,
                        max: 15,
                    },
                    scale: false,
                    labels: false,
                    step: 0.25,
                    range: false,
                    onChange: function(rateData){
                        moneyAdviceinterestRate.value = rateData;
                        calculate();
                    },
                    set: [4],
                    
                });


            }
            count++ ;
           
        })
    }
}




// Property Lower

lowerPropertyPrice.addEventListener('input', function(){
    calculate();
})

// Available Deposit Lower

lowerAvailableDeposit.addEventListener('input', function(){
    calculate();
})



function calculate(){

    

    // Get Values from input
    let propertyPrice = +lowerPropertyPrice.value;
    let depositAmount = +lowerAvailableDeposit.value
    
    let mortgageYear  = +mortgageTerm.value;
    let interestRateAmount  = +moneyAdviceinterestRate.value;


    if(depositAmount > propertyPrice){
        alert('Deposit should less than property value');
    } else{
        // Calculation
    let principleAmount = (propertyPrice - depositAmount);
    let percentageRate = interestRateAmount / 1200;
    let lengthOfLoan = 12 * mortgageYear;

    // Monthly Payment
    let monthlyPayment = (principleAmount * percentageRate) / (1-(Math.pow((1+percentageRate), lengthOfLoan * -1)));
    monthlyPayment = monthlyPayment.toFixed(2);


    //Monthly Interest
    let monthlyInterest = ((principleAmount * interestRateAmount) / 100)/12 ;

    

    // Monthly Payment 3% more

    let increaseedInterest = ( interestRateAmount+ 3 ) ;
    let increasePercentageRate = increaseedInterest / 1200
    let increasedMonthlyPayment = (principleAmount * increasePercentageRate) / (1-(Math.pow((1+increasePercentageRate), lengthOfLoan * -1)));


    // Monthly Interest 3% increased
    let increasedmonthlyInterest = ((principleAmount * increaseedInterest) / 100)/12 ;


    // OutPut

    document.getElementById('repaymentAmount').innerText = monthlyPayment;
    document.getElementById('repaymentMonthlyTotal').innerText = '£' + increasedMonthlyPayment.toFixed(2);
    document.getElementById('interestAmount').innerText = monthlyInterest;
    document.getElementById('onlyTotalInterest').innerText = '£' + increasedmonthlyInterest.toFixed(2);
   
    }

    


    }



// Back Button


document.getElementById('calculatorBack').addEventListener('click', function(){

    document.getElementById('upperContent').style.display = 'block';
    document.getElementById('lowerContent').style.display = 'none';
    location.reload();
    upperAvailableDeposit.value = '';
    upperPropertyPrice.value = ''

})


    


    






