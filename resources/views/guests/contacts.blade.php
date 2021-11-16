@include('partials.admin.header')

<h1>Contact Us</h1>
<form class="contacts">
    <label>Name</label>
    <input type="text" placeholder="Insert your Name" size="30" style="display: block; margin-bottom: 20px;">
    <label>Email</label>
    <input type="email" placeholder="Insert your Email Address" size="30" style="display: block; margin-bottom: 20px;">
    <label>Message</label>
    <textarea cols="50" rows="10" placeholder="Your Message" style="display: block; margin-bottom: 20px;"></textarea>
    <button type="submit">Send</button>
</form>

