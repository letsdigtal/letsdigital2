document.addEventListener('DOMContentLoaded',()=>{
  // Mobile menu toggle simple
  const ham=document.querySelector('.hamburger');
  const links=document.querySelector('.nav-links');
  if(ham && links){
    ham.addEventListener('click',()=>{
      if(links.style.display==='flex'){links.style.display='none'}else{
        links.style.display='flex';
        links.style.flexDirection='column';
        links.style.position='absolute';
        links.style.top='64px';links.style.left='0';links.style.right='0';
        links.style.background='#fff';links.style.padding='16px 24px';
        links.style.borderBottom='1px solid #E5E7EB';links.style.zIndex='99';
      }
    })
  }
  // FAQ accordion
  document.querySelectorAll('.faq-q').forEach(q=>{
    q.addEventListener('click',()=>{
      const item=q.closest('.faq-item');
      const wasOpen=item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(o=>o.classList.remove('open'));
      if(!wasOpen) item.classList.add('open');
    })
  });
  // Open first FAQ by default on FAQ sections
  document.querySelectorAll('.faq-list .faq-item:first-child, .faq-big .faq-item:first-child').forEach(el=>el.classList.add('open'));

  // Tabs for recent projects (demo filter)
  document.querySelectorAll('.tab').forEach(tab=>{
    tab.addEventListener('click',()=>{
      document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
      tab.classList.add('active');
    })
  });

  // Smooth form handling - open whatsapp / alert
  document.querySelectorAll('form').forEach(f=>{
    f.addEventListener('submit',e=>{
      e.preventDefault();
      const btn=f.querySelector('button[type="submit"]');
      const orig=btn ? btn.textContent : '';
      if(btn){btn.textContent='Sent!';btn.disabled=true}
      setTimeout(()=>{
        alert('Thank you! Your enquiry has been received. We will contact you shortly.');
        f.reset();
        if(btn){btn.textContent=orig;btn.disabled=false}
      },600)
    })
  });

  // Location accordion demo
  document.querySelectorAll('.loc-item').forEach(i=>{
    i.addEventListener('click',()=> i.classList.toggle('active'))
  })
})
