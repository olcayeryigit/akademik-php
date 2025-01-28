









<section id="about" class="pt-2 animate-bg-color">
<?php if (!empty($about)): ?>

    <div  class="bg-[#FDFBFC] py-4 md:py-10 px-4">

<div class="container mx-auto ">
    <h1 class="text-4xl font-bold mb-3">KURUMSAL</h1>
    <p><?= esc($about[0]['mainparagraph']); ?></p> <!-- İlk paragrafı göster -->

 <div class="flex flex-col md:flex-row mt-4 md:mt-12">



<div class="flex flex-col md:flex-row  md:px-8 mb-6">
<img src="/assets/images/misyon.png" class="w-40 md:w-60 object-contain"/>
<div>
<h1 class="text-2xl font-bold mb-3 ">Misyonumuz</h1>

<p class="hidden md:block"><?= esc($about[0]['mission']); ?></p> <!-- Mission paragrafını göster -->

<div class="relative overflow-hidden md:hidden">
  
<p id="misyonContent" class="line-clamp-3 text-sm transition-all duration-300"><?= esc($about[0]['mission']); ?></p> <!-- Mission paragrafını göster -->

  <button id="misyonButton" class="mt-2 text-[#0d0d0d] font-medium  text-sm flex items-center gap-1  ">

    <span id="misyonButtonText text-[#001F55]">Daha Fazla Gör</span>

    <div id="misyonIcon">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#001F55" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m8.5 11l3.5 3.5l3.5-3.5"/><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
</div>

  </button>
</div>

</div>
</div>


 
<div class="flex flex-col md:flex-row md:px-8">
<img src="/assets/images/vizyon.png" class="w-40 md:w-60 object-contain"/>
<div>
<h1 class="text-2xl font-bold mb-3">Vizyonumuz</h1>



<p class="hidden md:block"><?= esc($about[0]['vision']); ?></p> <!-- Vision paragrafını göster 
    -->
<div class="relative overflow-hidden md:hidden">
 
<p id="vizyonContent" class="line-clamp-3 text-sm transition-all duration-300"><?= esc($about[0]['vision']); ?></p> <!-- Vision paragrafını göster -->

  <button id="vizyonButton" class="mt-2 text-[#0d0d0d] font-medium  text-sm flex items-center gap-1  ">
    <span id="vizyonButtonText text-[#001F55]">Daha Fazla Gör</span>

    <div id="vizyonIcon">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#001F55" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m8.5 11l3.5 3.5l3.5-3.5"/><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10"/></g></svg>
</div>
</div>

</div>
</div>





</div>




<p class="mt-8 hidden md:block"  ><?= esc($about[0]['paragraph2']); ?></p> 

<p class="mt-4 hidden md:block"><?= esc($about[0]['paragraph3']); ?></p> 


</div>


</div>
<?php endif; ?>

</section>