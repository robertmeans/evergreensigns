    <form method="post" id="contactForm">
      <input type="hidden" name="contactes">
    <ul class="contact-form">

        <li class="contact_pg">

          <input name="name" type="text" id="name" tabindex="10" placeholder="Name">
        </li>
        <li class="contact_pg">

          <input name="email" type="email" id="email" tabindex="20" placeholder="Email">
        </li>
        <li class="contact_pg">

          <input name="tel" type="tel" id="tel" tabindex="20" placeholder="10-digit phone">
        </li>
        <li class="contact_pg">
          <textarea name="comments" id="comments" tabindex="30" placeholder="Message"></textarea>
        </li>
        <li class="send-spot">

          <div id="msg"></div>

          <div id="send-area">
            <div id="send">Send</div>
            <div id="reset">Reset</div>
          </div>

        </li>
    </ul> 
    </form>