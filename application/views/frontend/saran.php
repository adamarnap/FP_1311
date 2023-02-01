   <!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Saran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Kategori</a></div>
              <div class="breadcrumb-item">Main</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Feedback</h2>
      
       

            <div class="row">
              <div class="col-30 col-md-10 col-lg-10"> 
              <form method="POST" action="<?php echo site_url('saran/add');?>">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Saran</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">

                        <tr> 
                        <th>Tampilan Web</th> 
                        <td> 
                          <select class="form-control" name="penilaian_tampilan" required> 
                          <option value="0">-penilaian-</option> 
                            
                              <option value="penilaian">Sangat Baik</option>    
                              <option value="penilaian">Baik</option>    
                              <option value="penilaian">Kurang</option>    
                              <option value="penilaian">Kurang Sekali</option>   
                           
                            </select>
                            </td>
                        <tr>
                          <tr>
                            <th>Kemudahan Penggunaan</th>
                          <td> 
                          <select class="form-control" name="penilaian_penggunaan" required> 
                          <option value="0">-penilaian-</option> 
                            
                              <option value="penilaian">Sangat Baik</option>    
                              <option value="penilaian">Baik</option>    
                              <option value="penilaian">Kurang</option>    
                              <option value="penilaian">Kurang Sekali</option>   
                           
                            </select>
                            </td>
                          </tr>
                        <tr>  
                            <th>Saran Dan Masukan</th>
                            <td> 
                            <div>
                            <input type="text" class="form-control" id="inputEmail3" name="keterangan" placeholder="Saran dan Keterangan" required>
                            </div> 
                            </td> 
                        </tr> 
                        <tr>   
                        <th> 
                        <label class="d-block">Rekomendasikan Web</label> 
                        <td>
                         
                    <div class="form-check form-check-inline"> 
                    <input class="form-check-input"  type="checkbox" name="rw" id="inlinecheckox1" value="Yes"> 
                  <label class="form-check-label" for="inlinecheckbox">Yes</label>  
                  </div>
                  <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="checkbox" name="rw" id="inlinecheckox2" value="No" >
                    <label class="form-check-label" for="inlinecheckbox">No</label>  
                  </div>  
                  </td> 
                  </th>
                    </tr>
                     <!--saran coba neh-->
<!--           
<svg class="svg-icon__sprite">
  <defs>
    <symbol id="triangle" viewbox="0 0 32 32">
      <title>Triangle icon.</title>
      <desc>For interactions.</desc>
      <g stroke-width="3" stroke-linecap="round">
        <line x1="6" y1="6" x2="26" y2="6"></line>
        <line x1="6" y1="6" x2="16" y2="26"></line>
        <line x1="26" y1="6" x2="16" y2="26"></line>
      </g>
    </symbol>
    <symbol id="reload" viewbox="0 0 32 32">
      <title>Reload icon.</title>
      <desc>For interactions.</desc>
      <path d="M14.5 1c1.9 0 3.7.4 5.5 1.1 1.8.7 3.4 1.8 4.8 3.2 0 0 1.4 1.4 4.3 4.2V3.9c0-.4.1-.7.4-1 .3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1v8.7c0 .4-.1.7-.4 1-.3.3-.6.4-1 .4h-8.7c-.4 0-.7-.1-1-.4-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4h4.9c-2.1-2-3.4-3.3-4-3.9-1.1-1.1-2.4-2-3.9-2.6-1.4-.6-2.8-.9-4.4-.9s-3 .3-4.4.9c-1.3.6-2.6 1.5-3.7 2.6s-2 2.4-2.6 3.9c-.6 1.4-.9 2.8-.9 4.4s.3 3 .9 4.4c.6 1.4 1.4 2.7 2.6 3.9 1.1 1.1 2.4 2 3.9 2.6 1.4.6 2.8.9 4.4.9s3-.3 4.4-.9c1.4-.6 2.7-1.4 3.9-2.6 1.3-1.3 2.2-2.7 2.8-4.4.1-.4.4-.7.7-.8.4-.2.7-.2 1.1-.1.4.1.7.4.8.8.2.4.2.7.1 1.1-.3 1-.8 2-1.4 2.9s-1.3 1.8-2 2.5c-1.4 1.4-3 2.5-4.8 3.2-1.8.7-3.6 1.1-5.5 1.1s-3.7-.4-5.5-1.1c-1.8-.7-3.4-1.8-4.8-3.2s-2.5-3-3.2-4.8C.4 19.3 0 17.4 0 15.5s.4-3.7 1.1-5.5c.7-1.8 1.8-3.4 3.2-4.8s3-2.5 4.8-3.2c1.7-.6 3.6-1 5.4-1z"></path>
    </symbol>
    <symbol id="dot-inverted" viewbox="0 0 32 32">
      <title>Dot icon.</title>
      <desc>For interactions.</desc>
      <circle cx="16" cy="16" r="10" fill="none" stroke-width="9"></circle>
    </symbol>
    <symbol id="dot" viewbox="0 0 32 32">
      <title>Dot icon.</title>
      <desc>For interactions.</desc>
      <circle cx="16" cy="16" r="14" fill="none" stroke-width="3"></circle>
      <circle cx="16" cy="16" r="4" fill="none" stroke-width="3"></circle>
    </symbol>
    <symbol id="arrow" viewbox="0 0 32 32">
      <title>Arrow icon.</title>
      <desc>For interactions.</desc>
      <path d="M12.8 3c.4 0 .8.2 1.1.5s.5.7.5 1.1c0 .5-.2.8-.5 1.1l-8.5 8.5h24.9c.4 0 .8.2 1.1.5.3.3.5.7.5 1.1s-.2.8-.5 1.1c-.3.3-.7.5-1.1.5H5.5l8.5 8.5c.3.3.5.7.5 1.1 0 .4-.2.8-.5 1.1s-.7.5-1.1.5c-.4 0-.8-.2-1.1-.5L.5 17c-.3-.3-.5-.7-.5-1.1s.2-.8.5-1.1L11.7 3.5c.3-.3.7-.5 1.1-.5z"></path>
    </symbol>
    <symbol id="eye" viewbox="0 0 32 32">
      <title>Eye icon.</title>
      <desc>For toggleable elements.</desc>
      <path d="M16 4c1.5 0 2.9.2 4.2.7 1.4.4 2.6 1 3.6 1.7s2 1.5 2.9 2.3 1.7 1.7 2.3 2.6 1.2 1.6 1.6 2.3c.5.7.8 1.3 1 1.7l.4.7c0 .1-.1.2-.2.4s-.3.5-.6 1.1-.6 1.1-1 1.6-.8 1.2-1.4 1.9c-.6.7-1.2 1.4-1.8 2s-1.3 1.2-2.2 1.9c-.8.6-1.7 1.2-2.6 1.6s-1.9.8-3 1.1c-.9.3-2.1.4-3.2.4-1.5 0-2.9-.2-4.2-.7s-2.6-1-3.6-1.7-2-1.5-2.9-2.3-1.7-1.7-2.3-2.5-1.2-1.6-1.6-2.3-.8-1.3-1-1.7l-.4-.7c0-.1.1-.2.2-.4s.3-.5.6-1.1.6-1.1 1-1.6.8-1.2 1.4-1.9 1.2-1.4 1.8-2 1.3-1.2 2.2-1.9S8.8 6 9.7 5.5c.9-.4 1.9-.8 3-1.1S14.9 4 16 4zm0 2.7c-1 0-1.9.1-2.9.4s-1.8.6-2.5 1c-.8.4-1.5.8-2.2 1.4-.7.6-1.3 1.1-1.9 1.7S5.5 12.4 5 13s-.9 1.2-1.2 1.7c-.3.5-.6.9-.8 1.4.3.5.5.9.8 1.4s.7 1 1.2 1.6l1.5 1.8s1.1 1.1 1.9 1.7c.7.6 1.5 1.1 2.2 1.5.8.4 1.6.7 2.5 1s1.9.4 2.9.4 1.9-.1 2.9-.4c.9-.3 1.8-.6 2.5-1s1.5-.9 2.2-1.5c.7-.6 1.3-1.1 1.9-1.7l1.5-1.8 1.2-1.6c.3-.5.6-.9.8-1.4-.3-.5-.5-.9-.8-1.4-.3-.5-.7-1-1.2-1.6l-1.5-1.8c-.5-.6-1.1-1.1-1.9-1.7-.7-.6-1.5-1.1-2.2-1.5-.8-.4-1.6-.7-2.5-1S17 6.7 16 6.7zm0 4c1.5 0 2.7.5 3.8 1.6 1 1 1.6 2.3 1.6 3.8s-.5 2.7-1.6 3.8c-1 1-2.3 1.6-3.8 1.6s-2.7-.5-3.8-1.6c-1-1-1.6-2.3-1.6-3.8s.5-2.7 1.6-3.8 2.3-1.6 3.8-1.6zm0 2.6c-.7 0-1.4.3-1.9.8s-.8 1.1-.8 1.9.3 1.4.8 1.9 1.1.8 1.9.8 1.4-.3 1.9-.8.8-1.1.8-1.9-.3-1.4-.8-1.9-1.2-.8-1.9-.8z"></path>
    </symbol>
    <symbol id="firefox" viewbox="0 0 32 32">
      <title>Firefox icon.</title>
      <desc>Support for this browser.</desc>
      <path d="M31.8 10.6l-.4 2.4s-.5-4.4-1.2-6c-1-2.5-1.4-2.5-1.4-2.5.7 1.7.5 2.6.5 2.6S28.1 3.9 25 2.9c-3.4-1.1-5.3-.8-5.5-.8h-.1.1s3.8.7 4.5 1.6c0 0-1.6 0-3.2.5-.1 0 5.9.7 7.1 6.7 0 0-.7-1.4-1.5-1.6.5 1.6.4 4.7-.1 6.2-.1.2-.1-.8-1.1-1.3.3 2.3 0 5.9-1.6 6.9-.1.1 1-3.6.2-2.2-4.4 6.8-9.6 3.1-12 1.5 1.2.3 3.5 0 4.5-.8 1.1-.8 1.7-1.3 2.3-1.2.6.1 1-.5.5-1s-1.6-1.2-3-.8c-1.1.3-2.4 1.4-4.3.3-1.5-.9-1.7-1.7-1.7-2.2 0-.2.1-.4.1-.5.2-.5.7-.6 1-.8.5.1.9.2 1.4.5v-.6c0-.1 0-.3-.1-.7 0-.3-.1-.6-.2-.9 0-.1.4-.4.8-.7.4-.3.8-.5 1.2-.8.5-.2.7-.3.7-.4l.1-.1c.2-.1.4-.4.5-.9v-.1-.2-.1c-.1-.1-.3-.2-1.1-.2h-1.4c-1 0-1.6-1-1.8-1.4.2-1.4 1-2.4 2.1-3 .2-.1-2.8 0-4.2 1.8-1.1-.4-2.2-.4-3.1-.2-.2 0-.4 0-.7-.1-.6-.5-1.5-1.6-1.6-2.8 0 0-1.9 1.4-1.6 5.4v.2c-.5.6-.7 1.2-.7 1.3-.5.9-.9 2.3-1.3 4.4 0 0 .3-.8.8-1.8-.4 1.2-.7 3-.5 5.8 0 0 0-.6.2-1.5.1 1.7.7 3.8 2.1 6.3 2.8 4.7 7 7.1 11.7 7.5.8.1 1.7.1 2.5 0h.2c1-.1 1.9-.2 2.9-.4 13.1-3.2 11.7-19.1 11.7-19.1z"></path>
    </symbol>
    <symbol id="chrome" viewbox="0 0 32 32">
      <title>Chrome icon.</title>
      <desc>Support for this browser.</desc>
      <path d="M8.2 14.1L3.7 6.3c2.9-3.6 7.4-6 12.4-6C21.9.3 27 3.4 29.7 8.1H16.1c-3.8 0-7 2.5-7.9 6zm13.6-3.7h9.1c.7 1.8 1.1 3.7 1.1 5.8 0 8.7-7 15.7-15.7 15.8l6.5-11.2c.9-1.3 1.4-2.9 1.4-4.6 0-2.3-.9-4.3-2.4-5.8zm-11.5 5.8c0-3.2 2.6-5.8 5.8-5.8s5.8 2.6 5.8 5.8-2.6 5.8-5.8 5.8-5.8-2.7-5.8-5.8zm8 7.8l-4.5 7.9C6.1 30.7.2 24.1.2 16.2c0-2.8.7-5.5 2-7.8l6.5 11.2c1.3 2.8 4.1 4.7 7.3 4.7.8 0 1.6-.1 2.3-.3z"></path>
    </symbol>
    <symbol id="safari" viewbox="0 0 32 32">
      <title>Safari icon.</title>
      <desc>Support for this browser.</desc>
      <path d="M16.1.3C7.3.3.2 7.4.2 16.2S7.3 32 16.1 32s15.8-7.1 15.8-15.8S24.8.3 16.1.3zM29.9 15v-.3.3zm-2.2-6.4l-.2-.3c.1.1.2.2.2.3zm-.8-1.1l-.1-.2s0 .1.1.2zm-2-2l-.2-.1c.1 0 .2.1.2.1zm-1-.8l-.3-.2c.1.1.2.2.3.2zm-6.3-2.3h-.3.3zm-2.7 0h-.3.3zM8.6 4.5l-.4.2c.1 0 .2-.1.4-.2zm-1.2.9l-.2.1c.1 0 .1-.1.2-.1zm-2 1.9l-.1.2c0-.1.1-.1.1-.2zm-.7 1l-.3.3.3-.3zm-2.4 6.3v0zm0 2.8v0zm2.1 6.3l.3.3-.3-.3zm.3.4l2.5-1.7-.3-.4-2.5 1.7C3.3 22 2.5 20 2.3 17.8l1.5-.1v-.5l-1.5.1v-.9h3v-.5h-3V15l1.5.1v-.5l-1.5-.1c.2-2.2 1-4.2 2.1-5.9l2.5 1.7.3-.4-2.5-1.6c.2-.3.3-.5.5-.7l1.1.9.3-.4-1.1-.9c.2-.2.4-.5.6-.7l2.1 2.1.4-.4-2.1-2 .6-.6.9 1.2.4-.3-.9-1.2c.2-.2.5-.4.7-.5l1.7 2.5.3-.3-1.6-2.5c1.7-1.1 3.7-1.9 5.9-2.1l.1 1.5h.5L15 2.3h.9v3h.5v-3h.9l-.1 1.5h.5l.1-1.5c2.2.2 4.2 1 5.9 2.1L21.9 7l.4.3L24 4.8c.2.2.5.3.7.5l-.9 1.1.4.3.9-1.1.6.6-.8.8-10.8 7.2L6.9 25l-.8.8-.6-.6 1.1-.9-.3-.4-1.1.9c-.2-.3-.3-.5-.5-.7zm.7.9c0-.1-.1-.1-.1-.2l.1.2zm1.8 1.8l.2.2-.2-.2zm1 .8l.3.2c-.1-.1-.2-.1-.3-.2zm6.3 2.3h.3c0 .1-.2.1-.3 0zm2.8.1h.3-.3zm6.3-2.2l.3-.2c-.1.1-.2.1-.3.2zm1.2-.8l.2-.1c-.1 0-.2 0-.2.1zm1.1-1zm.8-1l.1-.2c0 .1 0 .2-.1.2zm.3-.2l-1.1-.9-.3.4 1.1.9-.6.6-2.1-2.1-.4.4 2.1 2.1-.6.6-.9-1.2-.4.3.9 1.1c-.2.2-.5.4-.7.5L22.3 25l-.4.3 1.7 2.5c-1.7 1.1-3.7 1.9-5.9 2.1l-.1-1.5h-.5l.1 1.5h-.9v-3h-.5v3h-.9l.1-1.5h-.5l-.1 1.5c-2.2-.2-4.2-1-5.9-2.1l1.7-2.5-.4-.3-1.6 2.5c-.2-.2-.5-.3-.7-.5l.9-1.1-.4-.3-.9 1.1-.6-.6.8-.8 10.8-7.2 7.2-10.8.8-.8.6.6-1.1.9.3.4 1.1-.8c.2.2.4.5.5.7L25 9.9l.3.4 2.5-1.7c1.1 1.7 1.9 3.7 2.1 5.9l-1.5.1v.5l1.5-.1v.9h-3v.5h3v.9l-1.5-.1v.5l1.5.1c-.2 2.2-1 4.2-2.1 5.9L25.3 22l-.3.4 2.5 1.7c-.2.2-.4.4-.5.7zm2.9-7.4v.3-.3zm-2.2 6.3c-.1.1-.1.2-.2.3l.2-.3z"></path>
    </symbol>
    <symbol id="edge" viewbox="0 0 32 32">
      <title>Edge icon.</title>
      <desc>Support for this browser.</desc>
      <path d="M1.7 13.9C2.7 6.7 7.6.1 16.5 0c5.4.1 9.8 2.5 12.4 7.2 1.3 2.4 1.7 5 1.8 7.8v3.3H11c.1 8.1 12 7.8 17.1 4.3v6.6c-3 1.8-9.8 3.4-15 1.3-4.5-1.7-7.7-6.4-7.6-10.9-.3-5.9 2.8-9.8 7.5-12-1 1.2-1.8 2.6-2.2 5H22S22.7 6 15.7 6c-6.6.2-11.3 4-14 7.9z"></path>
    </symbol>
    <symbol id="explorer" viewbox="0 0 32 32">
      <title>iExplorer icon.</title>
      <desc>Support for this browser.</desc>
      <path d="M23.8 17.5H31c.1-.5.1-1 .1-1.5 0-2.5-.7-4.8-1.8-6.8 1.2-3.2 1.1-5.9-.4-7.5-1.5-1.5-5.6-1.3-10.2.8h-1C11.3 2.5 6 6.9 4.6 12.7c2-2.5 4.1-4.4 6.9-5.7-.3.2-1.7 1.7-2 2-7.3 7.3-9.7 16.9-7.2 19.4 1.9 1.9 5.3 1.6 9.3-.4 1.8.9 3.9 1.5 6.1 1.5 5.9 0 10.9-3.8 12.8-9.1h-7.3c-1 1.9-3 3.1-5.2 3.1s-4.2-1.3-5.2-3.1c-.4-.8-.7-1.8-.7-2.8l11.7-.1zM12 14c.2-3 2.6-5.4 5.7-5.4s5.5 2.4 5.7 5.4H12zM28.8 3.3c1 1 1 3 .1 5.3-1.5-2.3-3.7-4.1-6.3-5.1 2.8-1.2 5.1-1.4 6.2-.2zM4.2 27.9c-1.3-1.3-.9-4.1.8-7.4 1.1 3 3.1 5.4 5.7 7-2.9 1.4-5.3 1.6-6.5.4z"></path>
    </symbol>
    <symbol id="checkmark" viewbox="0 0 32 32">
      <title>Check icon.</title>
      <desc>For interactions.</desc>
      <path d="M2 20 L12 28 30 4"></path>
    </symbol>
    <symbol id="star" viewbox="0 0 32 32">
      <title>Star icon.</title>
      <desc>For ratings.</desc>
      <path d="M12.224 11.623L16 0l3.776 11.623H32l-9.888 6.865 3.776 11.417L16 22.668 6.112 29.85l3.776-11.362L0 11.623h12.224"></path>
    </symbol>
    <symbol id="heart" viewbox="0 0 32 32">
      <title>Heart icon.</title>
      <desc>For interactions.</desc>
      <path d="M15.452 29.874L2.626 17.152c-.528-.524-.985-1.11-1.36-1.736C-.835 11.928-.28 7.478 2.623 4.6 4.312 2.925 6.556 2 8.942 2c3.76 0 6.087 2.19 7.06 3.426.976-1.24 3.3-3.424 7.058-3.424 2.384 0 4.63.924 6.318 2.6 2.9 2.878 3.46 7.328 1.354 10.82-.37.625-.83 1.208-1.358 1.733L16.55 29.878c-.303.303-.792.303-1.095 0"></path>
    </symbol>
    <symbol id="smiley" viewbox="0 0 32 32">
      <title>Smiley icon.</title>
      <desc>For user reactions.</desc>
      <path d="M20 18.8c0 2.2-1.8 4-4 4s-4-1.8-4-4h8z"></path>
      <circle cx="4.5" cy="16.8" r="2.5"></circle>
      <circle cx="27.6" cy="16.8" r="2.5"></circle>
      <path d="M1.5 12.3c0-1.7 1.3-3 3-3s3 1.3 3 3"></path>
      <path d="M24.5 12.3c0-1.7 1.3-3 3-3s3 1.3 3 3"></path>
    </symbol>
  </defs>
</svg>
<main class="flexy__item flexy--items-center flexy--justify-center flexy--column">
  <section class="section flexy__item flexy--column flexy--items-center space--big">
    <header class="accessible-hide">
      <h2>CSS Ratings</h2>
    </header>
    <article class="section__article flexy__item flexy--column flexy--items-center">
      <header class="header space--medium">
        <h3 class="accessible-hide">A Sassy-Animated kit for inspiration</h3>
      </header>
      <form>
        <fieldset class="space--medium">
          <legend class="accessible-hide">Effect 1</legend>
          <div class="card">
            <svg class="stroke--white space--normal" id="svg" fill="none" width="150" viewbox="0 0 245 120">
              <g stroke-width="8" stroke-linejoin="round" stroke-linecap="round">
                <path id="mouth" d="M90,110 C100,110 144,110 155,110 C144,110 100,110 90,110"></path>
                <g fill="white">
                  <circle r="15" cx="34" cy="67"></circle>
                  <circle r="15" cx="211" cy="65"></circle>
                </g>
                <path id="eyebrowL" d="M14,8 56,30"></path>
                <path id="eyebrowR" d="M189,28 232,6"></path>
              </g>
            </svg>
          </div>
          <div class="rating rating__fx--2 flexy__item flexy--reverse-row" id="reaction">
            <input type="radio" id="value-2-4" name="rating-2"/>
            <label class="rating__label sparks" for="value-2-4" data-reaction="smile">
              <svg class="rating__label__icon svg-icon stroke--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
              </svg>
            </label>
            <input type="radio" id="value-2-3" name="rating-2"/>
            <label class="rating__label" for="value-2-3" data-reaction="less-smile">
              <svg class="rating__label__icon svg-icon stroke--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
              </svg>
            </label>
            <input type="radio" id="value-2-2" name="rating-2"/>
            <label class="rating__label" for="value-2-2" data-reaction="serious">
              <svg class="rating__label__icon svg-icon stroke--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
              </svg>
            </label>
            <input type="radio" id="value-2-1" name="rating-2"/>
            <label class="rating__label" for="value-2-1" data-reaction="less-angry">
              <svg class="rating__label__icon svg-icon stroke--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
              </svg>
            </label>
            <input type="radio" id="value-2-0" name="rating-2" checked="checked"/>
            <label class="rating__label" for="value-2-0" data-reaction="angry">
              <svg class="rating__label__icon svg-icon stroke--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#heart"></use>
              </svg>
            </label>
          </div>
        </fieldset>
        <fieldset class="space--medium">
          <legend class="accessible-hide">Effect 2</legend>
          <div class="rating rating__fx--0 flexy__item flexy--reverse-row">
            <input type="radio" id="value-0-4" name="rating-0"/>
            <label class="rating__label sparks" for="value-0-4">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-0-3" name="rating-0"/>
            <label class="rating__label" for="value-0-3">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-0-2" name="rating-0"/>
            <label class="rating__label" for="value-0-2">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-0-1" name="rating-0"/>
            <label class="rating__label" for="value-0-1">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-0-0" name="rating-0" checked="checked"/>
            <label class="rating__label" for="value-0-0">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
          </div>
        </fieldset>
        <fieldset class="space--medium">
          <legend class="accessible-hide">Effect 3</legend>
          <div class="rating rating__fx--1 flexy__item flexy--reverse-row">
            <input type="radio" id="value-1-4" name="rating-1"/>
            <label class="rating__label sparks" for="value-1-4">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-1-3" name="rating-1"/>
            <label class="rating__label" for="value-1-3">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-1-2" name="rating-1"/>
            <label class="rating__label" for="value-1-2">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-1-1" name="rating-1"/>
            <label class="rating__label" for="value-1-1">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <input type="radio" id="value-1-0" name="rating-1" checked="checked"/>
            <label class="rating__label" for="value-1-0">
              <svg class="rating__label__icon svg-icon fill--white">
                <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
              </svg>
            </label>
            <div class="rating__background"></div>
          </div>
        </fieldset>
      </form>
    </article>
  </section>
  <header class="header">
    <h1><a href="http://tadaima.studio" title="Go to Tadaima"></a></h1>
  </header>
</main>
<svg class="svg-bg" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <circle id="a" cx="1468" cy="133" r="35"></circle>
    <mask id="h" x="0" y="0" width="70" height="70" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
    </mask>
    <circle id="b" cx="236.5" cy="732.5" r="23.5"></circle>
    <mask id="i" x="0" y="0" width="47" height="47" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use>
    </mask>
    <circle id="c" cx="1120.5" cy="945.5" r="28.5"></circle>
    <mask id="j" x="0" y="0" width="57" height="57" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use>
    </mask>
    <path id="d" d="M1193.375 302.875l44.6 77.25h-89.2z"></path>
    <mask id="k" x="0" y="0" width="89.201" height="77.25" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use>
    </mask>
    <path id="e" d="M1610.8 513.3l34.14 59.128h-68.278z"></path>
    <mask id="l" x="0" y="0" width="68.277" height="59.13" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#e"></use>
    </mask>
    <path id="f" d="M51.045 967.864l38.314 66.362H12.73z"></path>
    <mask id="m" x="0" y="0" width="76.629" height="66.362" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#f"></use>
    </mask>
    <path id="g" d="M46.045 311.097l26.5 45.897H19.546z"></path>
    <mask id="n" x="0" y="0" width="52.997" height="45.897" fill="#fff">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#g"></use>
    </mask>
  </defs>
  <g style="mix-blend-mode:overlay" fill="none" fill-rule="evenodd" opacity=".35" stroke="#FFF">
    <use class="svg-bg_element" mask="url(#h)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#a"></use>
    <use class="svg-bg_element" mask="url(#i)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#b"></use>
    <use class="svg-bg_element opacity-anim" mask="url(#j)" stroke-width="6" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#c"></use>
    <path class="stroke-anim" d="M657.5 848.5l46 46" stroke-width="3" stroke-linecap="square"></path>
    <path d="M1360.5 1206.5l89-89M761.5 42.5l42-42" stroke-width="3" stroke-linecap="square"></path>
    <use class="svg-bg_element" mask="url(#k)" stroke-width="6" transform="rotate(90 1193.375 341.5)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#d"></use>
    <use class="svg-bg_element" mask="url(#l)" stroke-width="6" transform="rotate(45 1610.8 542.863)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#e"></use>
    <use class="svg-bg_element rotate-anim" mask="url(#m)" stroke-width="6" transform="rotate(45 51.045 1001.045)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#f"></use>
    <use class="svg-bg_element" mask="url(#n)" stroke-width="6" transform="rotate(20 46.045 334.045)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#g"></use>
  </g>
</svg> -->
<!--batas saran coba-->

<!--coba lagi-->
<div class="rating-slider">
    <div class="text">
        <strong>Rate your experience</strong>
        <ul>
            <li>awful</li>
            <li>bad</li>
            <li>okay</li>
            <li>good</li>
            <li>great</li>
        </ul>
    </div>
    <div class="smiley">
        <svg class="eye left" viewBox="0 0 18 22">
            <path d="M12.6744144,18.0128897 C17.3794842,15.6567898 19.3333811,9.83072065 17.0385652,5 C15.7595661,7.57089081 13.5517099,9.64170285 10.4149967,11.2124361 C7.27828344,12.7831694 3.80661788,13.5564215 0,13.5321925 C2.2948159,18.3629131 7.9693445,20.3689896 12.6744144,18.0128897 Z"></path>
        </svg>
        <svg class="eye right" viewBox="0 0 18 22">
            <path d="M12.6744144,18.0128897 C17.3794842,15.6567898 19.3333811,9.83072065 17.0385652,5 C15.7595661,7.57089081 13.5517099,9.64170285 10.4149967,11.2124361 C7.27828344,12.7831694 3.80661788,13.5564215 0,13.5321925 C2.2948159,18.3629131 7.9693445,20.3689896 12.6744144,18.0128897 Z"></path>
        </svg>
        <svg class="mouth" viewBox="0 0 64 28">
            <path d="M32,2 C41.5729357,2 58,10.8218206 58,21 C50.2396023,18.9643641 41.5729357,17.9465462 32,17.9465462 C22.4270643,17.9465462 13.7603977,18.9643641 6,21 C6,10.8218206 22.4270643,2 32,2 Z"></path>
        </svg>
        <svg class="teeth" viewBox="0 0 64 28">
            <path d="M32,7.83261436 C41.5729357,7.83261436 52.5729357,7.05507624 63,1.5 C63,10.3056732 46.3594035,14.5 32,14.5 C17.6405965,14.5 1,10.3056732 1,1.5 C11.4270643,7.05507624 22.4270643,7.83261436 32,7.83261436 Z"></path>
        </svg>
    </div>
    <div class="slide">
        <svg viewBox="0 0 273 12" fill="currentColor"><path d="M266.934082,0.00110627889 C270.247182,-0.0357036686 272.96282,2.62025389 272.99963,5.93335351 C272.999877,5.95556942 273,5.97778653 273,6.00000382 C273,9.31330792 270.314036,11.9992716 267.000732,11.9992716 C266.978515,11.9992716 266.956298,11.9991482 266.934082,11.9989014 L2.96667078,9.06611103 C1.32291919,9.04784825 1.97412392e-14,7.71014921 0,6.06629617 L0,5.93371146 C9.7279267e-16,4.28985843 1.32291919,2.95215939 2.96667078,2.93389661 L266.934082,0.00110627889 Z M267,1.45028446 C264.514719,1.45028446 262.5,3.4872632 262.5,6.00000382 C262.5,8.51274443 264.514719,10.5497232 267,10.5497232 C269.485281,10.5497232 271.5,8.51274443 271.5,6.00000382 C271.5,3.4872632 269.485281,1.45028446 267,1.45028446 Z M210,1.95580884 C207.790861,1.95580884 206,3.7664566 206,6.00000382 C206,8.23355103 207.790861,10.0441988 210,10.0441988 C212.209139,10.0441988 214,8.23355103 214,6.00000382 C214,3.7664566 212.209139,1.95580884 210,1.95580884 Z M137,2.46133321 C135.067003,2.46133321 133.5,4.04565001 133.5,6.00000382 C133.5,7.95435763 135.067003,9.53867443 137,9.53867443 C138.932997,9.53867443 140.5,7.95435763 140.5,6.00000382 C140.5,4.04565001 138.932997,2.46133321 137,2.46133321 Z M64,2.96685758 C62.3431458,2.96685758 61,4.32484341 61,6.00000382 C61,7.67516423 62.3431458,9.03315005 64,9.03315005 C65.6568542,9.03315005 67,7.67516423 67,6.00000382 C67,4.32484341 65.6568542,2.96685758 64,2.96685758 Z M3,3.97790633 C1.8954305,3.97790633 1,4.88323021 1,6.00000382 C1,7.11677742 1.8954305,8.02210131 3,8.02210131 C4.1045695,8.02210131 5,7.11677742 5,6.00000382 C5,4.88323021 4.1045695,3.97790633 3,3.97790633 Z"></path></svg>
        <span>
            <svg viewBox="0 0 273 12" fill="currentColor"><path d="M266.934082,0.00110627889 C270.247182,-0.0357036686 272.96282,2.62025389 272.99963,5.93335351 C272.999877,5.95556942 273,5.97778653 273,6.00000382 C273,9.31330792 270.314036,11.9992716 267.000732,11.9992716 C266.978515,11.9992716 266.956298,11.9991482 266.934082,11.9989014 L2.96667078,9.06611103 C1.32291919,9.04784825 1.97412392e-14,7.71014921 0,6.06629617 L0,5.93371146 C9.7279267e-16,4.28985843 1.32291919,2.95215939 2.96667078,2.93389661 L266.934082,0.00110627889 Z M267,1.45028446 C264.514719,1.45028446 262.5,3.4872632 262.5,6.00000382 C262.5,8.51274443 264.514719,10.5497232 267,10.5497232 C269.485281,10.5497232 271.5,8.51274443 271.5,6.00000382 C271.5,3.4872632 269.485281,1.45028446 267,1.45028446 Z M210,1.95580884 C207.790861,1.95580884 206,3.7664566 206,6.00000382 C206,8.23355103 207.790861,10.0441988 210,10.0441988 C212.209139,10.0441988 214,8.23355103 214,6.00000382 C214,3.7664566 212.209139,1.95580884 210,1.95580884 Z M137,2.46133321 C135.067003,2.46133321 133.5,4.04565001 133.5,6.00000382 C133.5,7.95435763 135.067003,9.53867443 137,9.53867443 C138.932997,9.53867443 140.5,7.95435763 140.5,6.00000382 C140.5,4.04565001 138.932997,2.46133321 137,2.46133321 Z M64,2.96685758 C62.3431458,2.96685758 61,4.32484341 61,6.00000382 C61,7.67516423 62.3431458,9.03315005 64,9.03315005 C65.6568542,9.03315005 67,7.67516423 67,6.00000382 C67,4.32484341 65.6568542,2.96685758 64,2.96685758 Z M3,3.97790633 C1.8954305,3.97790633 1,4.88323021 1,6.00000382 C1,7.11677742 1.8954305,8.02210131 3,8.02210131 C4.1045695,8.02210131 5,7.11677742 5,6.00000382 C5,4.88323021 4.1045695,3.97790633 3,3.97790633 Z"></path></svg>
        </span>
        <div></div>
    </div>
</div>

<svg style="position: absolute; visibility: hidden;">
    <defs>
        <filter id="inset-shadow">
            <feOffset dx='0' dy='3' />
            <feGaussianBlur stdDeviation='1' result='offset-blur' />
            <feComposite operator='out' in='SourceGraphic' in2='offset-blur' result='inverse' />
            <feFlood flood-color='black' flood-opacity='.5' result='color' />
            <feComposite operator='in' in='color' in2='inverse' result='shadow' />
            <feComposite operator='over' in='shadow' in2='SourceGraphic' />
        </filter>
    </defs>
</svg>

<!--batas coba-->
                      </table>
                    </div> 
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                  </div>
                  
                </div>
              </div>
             
            </div>

          </div>

         
        </section>
      </div>

      