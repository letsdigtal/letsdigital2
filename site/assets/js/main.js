 // Avenue Roofing V1.0.1 - Reusable Workspace JS - mobile menu + FAQ + tabs + forms
  // mobile menu
  const ham=document.querySelector('.hamburger');
  const mobile=document.querySelector('.mobile-menu');
  if(ham){
    ham.addEventListener('click',()=>{
      if(mobile) mobile.classList.toggle('open');
      else {
        // fallback toggle nav-links
        const links=document.querySelector('.nav-links');
        if(links){
          links.style.display = links.style.display==='flex' ? 'none' : 'flex';
          if(links.style.display==='flex'){
            links.style.position='absolute';links.style.top='60px';links.style.left='0';links.style.right='0';
            links.style.background='#fff';links.style.padding='16px 24px';links.style.flexDirection='column';
            links.style.borderBottom='1px solid #E5E7EB';links.style.zIndex='99';
          }
        }
      }
    });
  }
  // FAQ
  document.querySelectorAll('.faq-q').forEach(q=>{
    q.addEventListener('click',()=>{
      const item=q.closest('.faq-item');
      const wasOpen=item.classList.contains('open');
      // close siblings in same list only
      const parent=item.parentElement;
      parent.querySelectorAll('.faq-item.open').forEach(o=>o.classList.remove('open'));
      if(!wasOpen) item.classList.add('open');
    })
  });
  // tabs
  document.querySelectorAll('.tab').forEach(tab=>{
    tab.addEventListener('click',()=>{
      const group=tab.closest('.tabs');
      if(group) group.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
      tab.classList.add('active');
    })
  });
  // forms
  document.querySelectorAll('form').forEach(f=>{
    f.addEventListener('submit',e=>{
      e.preventDefault();
      const btn=f.querySelector('button[type="submit"]');
      const orig=btn?btn.textContent:'';
      if(btn){btn.textContent='Sent!';btn.disabled=true}
      setTimeout(()=>{
        alert('Thank you! Your enquiry has been received. We will contact you shortly.');
        f.reset();
        if(btn){btn.textContent=orig;btn.disabled=false}
      },500)
    })
  });
  // location item toggle visual
  document.querySelectorAll('.loc-item').forEach(i=>{
    i.addEventListener('click',()=> i.classList.toggle('active'))
  })
})
