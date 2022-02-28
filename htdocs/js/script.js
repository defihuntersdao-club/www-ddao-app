window.onload = function() {

  setTimeout(function () {
   let loader = document.querySelector('.loader');
   loader.remove();
  }, 500);

  function clearActive(name) {
    for (let i=0; i<name.length;i++) {
      name[i].classList.remove('active');
    }
  }

  //networks change
  let netParentLinks = document.querySelectorAll('.networks-link');
  let netLinks = document.querySelectorAll('.networks-link .networks__link');
  for (let i=0; i<netLinks.length;i++) {
    netLinks[i].onclick = function() {
      let active = document.querySelector('.networks__active');
      active.classList.remove('notavailable');
      clearActive(netParentLinks);
      let activeHTML = this.innerHTML;
      let btn = document.querySelector('.networks__btn');
      btn.innerHTML = activeHTML;
      let parentEl = this.closest('.networks-link');
      parentEl.classList.add('active');
      return false;
    };
  }

  //sort change
  let sortLinks = document.querySelectorAll('.sort__link');
  for (let i=0; i<sortLinks.length;i++) {
    sortLinks[i].onclick = function() {
      clearActive(sortLinks);
      this.classList.add('active');
      let activeHTML = this.innerHTML;
      let btn = document.querySelector('.sort__btn');
      btn.classList.add('active');
      btn.innerHTML = activeHTML;
     
      return false;
    };
  }

  
  //views
  let viewsLinks = document.querySelectorAll('.views__link');
  for (let i=0; i<viewsLinks.length;i++) {
    viewsLinks[i].onclick = function() {
      clearActive(viewsLinks);
      viewsLinks[i].classList.add('active');
    };
    
  }

  //top tabs
  let topTabs = document.querySelectorAll('.top-tabs__tab');
  for (let i=0; i<topTabs.length;i++) {
    topTabs[i].onclick = function() {
      clearActive(topTabs);
      topTabs[i].classList.add('active');
    };
    
  }

  //wallet id cut
  let walletId = 0;
  let walletSpan = document.querySelectorAll('.wallet-id');
  
  for (let i=0; i<walletSpan.length;i++) {
    walletId = walletSpan[i].innerHTML.trim();
    let shortAddress = walletId.slice(0, 5);
    shortAddress += '...';
    shortAddress += walletId.slice(-4);
    walletSpan[i].innerHTML = shortAddress;
  }

  //copy address
  let btnCopy = document.querySelector('.popup__copy');
  btnCopy.onclick = function() {
    copyToClipboard(walletId);
    btnCopy.classList.add('copied');
    setTimeout(function() {
      btnCopy.classList.remove('copied');
    }, 2000);
    return false;
  }

  //addresses show
  let btnAddressShow = document.querySelector('.addresses__show');
  btnAddressShow.onclick = function() {
    
    let addressBlock = document.querySelector('.addresses-group');
    if(this.classList.contains('active')) {
      this.classList.remove('active');
      addressBlock.classList.remove('active');
    } else {
      this.classList.add('active');
      addressBlock.classList.add('active');
    }
    return false;
  }

  //add address, cancel address
  let btnConfirm = document.querySelector('.btn-confirm');

  btnConfirm.onclick = function() {
    let textConfirm = document.querySelector('#input-add').value;

    let shortAddress = textConfirm.trim().slice(0, 10);
    shortAddress += '...';
    shortAddress += textConfirm.slice(-8);

    let text = '<li class="list-group-item"><button type="button" class="btn btn-delete-address" data-bs-toggle="modal" data-bs-target="#deleteAddress" data-address="' +
    textConfirm + '"><span>' + shortAddress +
    '</span></button><a href="#" class="address-copy"><img src="images/copy.svg" alt=""></a><img src="images/copied.svg" alt="" class="copied"></li>';
    let containerAddress = document.querySelector('.addresses-group .list-group');
    containerAddress.insertAdjacentHTML('beforeend', text);
    document.querySelector('#input-add').value = '';

    let elemClose = this.closest('.modal-footer').querySelector('.btn-cancel');
    elemClose.click();
    
  }

  let myModalEl = document.getElementById('addAddress');
  myModalEl.addEventListener('hidden.bs.modal', function (event) {
    openAccount();    
  });

  let myModalEl3 = document.getElementById('deleteAddress');
  myModalEl3.addEventListener('hidden.bs.modal', function (event) {
    openAccount();    
  });

  function openAccount() {
    let elemModal2 = document.querySelector('#accountModal');
    let modal2 = new bootstrap.Modal(elemModal2);
    modal2.show();
  }

  //address block
  let fullAddresses = document.querySelectorAll('.addresses-group .list-group-item');
  for (let i=0; i<fullAddresses.length;i++) {
    let fullAddress = fullAddresses[i].querySelector('button span').innerHTML.trim();
    let shortAddress = fullAddress.slice(0, 10);
    shortAddress += '...';
    shortAddress += fullAddress.slice(-8);
    fullAddresses[i].querySelector('button span').innerHTML = shortAddress;
    fullAddresses[i].querySelector('button').setAttribute('data-address', fullAddress);
  }

 
  let myModalEl2 = document.getElementById('deleteAddress');
  let button;
  myModalEl2.addEventListener('show.bs.modal', function (event) {
    button = event.relatedTarget;
    let buttonAddress = button.getAttribute('data-address');
    this.querySelector('.modal-text').innerHTML = buttonAddress;
  });

  let btnDel = document.querySelector('.btn-del');

  btnDel.onclick = function() {
    console.log(button);
    if(button) {
      button = button.parentElement;
      button.parentElement.removeChild(button);
    }    

    let elemClose = this.closest('.modal-footer').querySelector('.btn-cancel');
    elemClose.click();
  
  }

  //address copy
  document.body.addEventListener('click', function (event) {
    let target = event.target.closest('.address-copy');
    if (!target) return;
    let textAddress = target.parentElement.querySelector('button').getAttribute('data-address');
    
    copyToClipboard(textAddress);
    target.parentElement.classList.add('copied');
    setTimeout(function() {
      target.parentElement.classList.remove('copied');
    }, 2000);
    return false;
  });

  // return a promise
  function copyToClipboard(textToCopy) {
    // navigator clipboard api needs a secure context (https)
    if (navigator.clipboard && window.isSecureContext) {
        // navigator clipboard api method'
        return navigator.clipboard.writeText(textToCopy);
    } else {
        // text area method
        let textArea = document.createElement("textarea");
        textArea.value = textToCopy;
        // make the textarea out of viewport
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        textArea.style.top = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        return new Promise((res, rej) => {
            // here the magic happens
            document.execCommand('copy') ? res() : rej();
            textArea.remove();
        });
    }
  }

}