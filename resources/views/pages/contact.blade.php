<x-shell>
    <div class="banner inner-banner" id="home">
        <x-header page="contact"/>
        <h1 class="inner-title-agileits-w3layouts">About Us</h1>
    </div>
    <x-breadcrumb :links="$links"></x-breadcrumb>

    <!-- contact -->
    <section class="contact py-5">
        <div class="container py-xl-5 py-sm-3">
            <!---728x90--->

            <h5 class="main-w3l-title mb-sm-3 mb-2">Contact Us</h5>
            <!---728x90--->

            <div class="row">
                <div class="col-lg-4 wthree_contact_left">
                    <h3 class="subheading-wthree mb-3">About Us</h3>
                    <p class="paragraph-agileinfo">Lorem ipsum
                        <span>Welcome To Our Marry Off</span> dolor sit amet
                        <a href="mailto:info@example.com">info@example.com</a> interdum sed aliquet quis.</p>
                    <div class="info-img-agileits row">
                        <div class="col-4 info1"></div>
                        <div class="col-4 info2"></div>
                        <div class="col-4 info3"></div>
                    </div>
                    <h3 class="subheading-wthree mb-3">Servicing Hours</h3>
                    <ul>
                        <li class="mb-3">
                            <span>Monday-Friday</span> 9:00 am - 10:00 pm
                        </li>
                        <li>
                            <span>Saturday & Sunday</span> 9:00 am - 12:00 pm
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 wthree_contact_left">
                    <h3 class="subheading-wthree mb-3">Send us an Email</h3>
                    <form action="#" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textarea">Message</label>
                            <textarea id="textarea" placeholder="Message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary py-2 px-5">Submit</button>
                    </form>
                </div>
            </div>
            <!---728x90--->

        </div>
    </section>
    <section class="map-agileits">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.512905908186!2d44.50662171518936!3d40.17539757820561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcf86e940951%3A0x87a1923d7df42367!2sBest+Western+Congress+Hotel!5e0!3m2!1sen!2sin!4v1521098356599"></iframe>
    </section>
    <!-- //contact -->
</x-shell>
