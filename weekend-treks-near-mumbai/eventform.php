<div class="event-booking-form">
    <h3>Book this Event</h3>
    <div class="search-form">
     <form action="form.php" method="post" class="row">
       <div class="col-md-4 col-sm-6">
            <div class="input-box">
                <label>Your Name</label>
                <input name="name" required pattern="[a-zA-Z ]+" type="text" placeholder="Enter your name ">
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="input-box">
                <label>Your Email</label>
                <input name="email" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" type="text" placeholder="Enter your email ">
            </div>
        </div>

<div class="col-md-3 col-sm-6">
    <div class="input-box">
        <label>Contact No</label>
        <input name="contactno" required="" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" type="text" placeholder="Enter your Contact No">
    </div>
</div>



<div class="col-md-11 col-sm-12">

    <label>Message</label>
    <textarea name="comments" required cols="10" rows="10" placeholder="Please Specify the Event Name"></textarea>
</div>
<div class="col-md-12">
    <input type="submit" value="Send Now">
</div>
</form>
</div>
</div>

