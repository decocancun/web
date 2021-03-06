<?php 
    include_once "header.php";
?>
    <div class="title-contact d-flex justify-content-center align-items-center">
        <h4>CONTACT US</h4>
        <p>If you need further information, do not hesitate to contact us.</p>
    </div>
    <div class="container contenedor-contact">
        <div class="contenedor-form">
            <div class="title_contac">
                <h3>BOOK IT HERE</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-2">
                        <form>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" onblur="saveData('name');" required/>
                                    <span class="help-block name"></span>
                                </div>
                            </div>
                            <div class="row form-group"> 
                                <div class="col-md-12">
                                <label for="email">Email</label> 
                                <input type="email" id="email"  name="email" class="form-control" onblur="saveData('email');" required/>
                                <span class="help-block email"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                <label for="phone">Phone</label> 
                                <input type="text" max="10" id="phone" name="phone" class="form-control" onkeyup="saveData('phone');" required/>
                                <span class="help-block phone"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="events">Events</label>
                                    <select class="form-control" id="textEvents" name="textEvents">
                                    <option value="">Select your event </option>
                                    <option value="Event">Corporate Event</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Branding">Branding</option>
                                    </select>
                                    <span class="help-block textEvents"></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                <label for="textMess">Message</label> 
                                <textarea name="textMess" id="textMess" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row form-group d-flex justify-content-end">
                                <div class="col-md-12 d-flex justify-content-end">  
                                    <button type="button" class="btn buton_enviar py-2 px-4">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-contact">
            <span>Branch Offices</span>
                <ul class="branch-office">
                    <li><i class="fas fa-check"></i> Cancun Quintana Roo</li>
                    <li><i class="fas fa-check"></i> Puerto Aventuras Quintana </li>
                    <li><i class="fas fa-check"></i> Puerto Aventuras Quintana </li>
                </ul>
            <span>Opening Hours</span>
            <p>8:30 AM – 5:00 PM</p>
            <span>Email Address</span>
            <p>info@rentwander.com</p>
        </div>
    </div>



<?php 
    include_once "footer.php";
?>