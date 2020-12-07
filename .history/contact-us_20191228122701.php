<?php 
    include_once "header.php";
?>

    <div class="container contenedor-contact">
        <div class="contenedor_contact">
            <div class="title_contac">
                <h3>Contact Us</h3>
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
            <span></span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quos doloribus quas dolor ducimus. Quos debitis suscipit rerum aliquam 
                quisquam optio, pariatur aperiam reiciendis incidunt officiis quia ducimus 
                rem quae quibusdam.</p>
        </div>
    </div>



<?php 
    include_once "footer.php";
?>