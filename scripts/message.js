let message = [
  {
    productName: 'Purchase coupon',
    productNumber: '23323232',
    payments: 600,
    status: 'pending'
  },
  {
    productName: 'Purchase plan',
    productNumber: '5454554',
    payments: 500,
    status: 'pending'
  },
  {
    productName: 'Purchase airtime',
    productNumber: '64646464',
    payments: 5009,
    status: 'completed'
  }
];

let messageHTML ='';
function render() {
  message.forEach((displayMessage) => {
    messageHTML += `
    <table>
            <thead>
              <tr>
                <th>Product name</th>
                <th>Product number</th>
                <th>Payments</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>${displayMessage.productName}</td>
                <td>${displayMessage.productNumber}</td>
                <td>$${displayMessage.payments}</td>
                <td class="warning">${displayMessage.status}</td>
                
              </tr>
              
            </tbody>
    </table>
    `
    
    document.querySelector('.js-message').innerHTML = messageHTML;
    
  });
 
  console.log(message);
  
};

 render();

  
 
 let newMessage = [{
  productName: 'Ebuka',
  productNumber: '23323232',
  payments: 600,
  status: 'pending'
  
}];


  let intervalId;
  let isautoDisplaying = false;
    function timeoutDisplay() {
      if(!isautoDisplaying){
        intervalId = setInterval(() => {
          newMessage.forEach((display) => {
            //console.log(display);
              message.push(display);
            
          });
         render();
        
        }, 10000);
        isautoDisplaying = true;

      }else{
        clearTimeout(intervalId);
        isautoDisplaying = false;
      }
       
    
       
    }
   
    timeoutDisplay();
   
 
   
   


  
  

   
    //document.querySelector('.js-message').innerHTML = messageHTML;
    //console.log(pageHTML);
    //console.log(message);

    
  

 


  

  //



  

