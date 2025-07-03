@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section media-reviews-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Media Reviews</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newspaper-reviews-section">
            <img class="left-img" src="{{ asset("assets/images/main-side-design.png") }}" alt="">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Newspaper Reviews</h1>
                    </div>
                    <div class="media-reviews">
                        <div class="reviews-area-top">
                            <img class="img-fluid news-paper-left-img" src="{{ asset("assets/images/newspaper-rev-left-img.png") }}"
                                alt="">
                            <h2 class="review-title">FOUR FORKS</h2>
                            <p class="review-dis-text">This should happen more frequently than it does: You walk into a
                                neighborhood restaurant, receive a warm greeting and flawless food, pay a very reasonable
                                price and, upon your departure, are cheerily invited to return. That's the scenario that
                                unrolled at Noon O Kabab during a recent weekday lunch. It was an ideal Cheap Eats
                                experience. A small corner storefront on the city's Northwest Side, Noon O Kabab was opened
                                a year ago by Amin Naghavi and his son, Javad. The elder Naghavi is frequently visible in
                                the kitchen and 20-seat dining area; his son is the front man, charming customers with good
                                will and enthusiasm. He's a comedian with a sensitive palate, a rare combination. The
                                cuisine is Persian, which means the owners are from Iran. Javad says that Tabriz, the
                                family's native town, is home to the country's best cooks and says everyone in his family
                                cooks well. This may be the secret of Noon O Kabab's culinary success. The food is home
                                cooking at its very best, prepared daily with care from impeccably fresh ingredients. There
                                are no showoff elaborations here. Nothing, including seasonings, is excessive. Portions are
                                generous. So what to order? Above all, try the rice. The remarkably fluffy yet substantial
                                pure white grains heaped on platters with all entrees is a revelation in both taste and
                                texture. A scattering of saffron-colored rice atop the white grains provides color contrast.
                                (A generous side order of this delightful treat is a mere $1.95.) Meat-eaters will like the
                                options. Barg, soft as silk, slightly smoky marinated filet slices ($7.95, or $9.95 for a
                                larger portion), is irresistible. Chenjeh (or tickeh kebab, $8.75) is two skewers of
                                marinated rib-eye. The meat is drier and has a firmer texture than the filet, but it is
                                delicious. Even more intriguingly flavored is koubideh ($5.95), a combination of ground beef
                                and ground lamb wrapped around two skewers. Grilling imparts a haunting smoke flavor. Joujeh
                                kebab ($8.75), squares of marinated chicken breast, come off the grill golden and moist. All
                                these entrees come with charbroiled tomatoes and rice. Various combination plates are
                                available too. For those who love braises and stews, the lamb shanks ($8.75) are a
                                must-taste item. They are cooked in a tomato and ginger sauce until perfectly tender.
                                Ghormeh sabzi ($7.45) is a tasty beef stew with spinach, herbs and dried lime slices.
                                Vegetarian offerings include an eggplant plate, a zucchini plate and a &quot;vegetarian
                                mix,&quot; each $5.95. To go back to the beginning, the first item served is a plate
                                containing some feta cheese, bits of onion and tomato and fresh herbs. The appetizers, all
                                fresh and distinctive, include yogurt salad ($1.95) with cucumber and mint; borani ($2.25),
                                yogurt with spinach, onion and garlic; olovieh ($3.45), a tasty chicken and potato salad;
                                and the delightfully smoky, eggplant-based dip, baba ghanouj ($1.45 or $2.95). Noon, the
                                restaurant's name, means bread, Javad says, and the house bread is a soft and flavorful naan
                                ideal for making your own sandwich with kebab pieces, or for mopping up any juices or bits
                                of food left on the plate. Desserts include saffron-colored, highly perfumed Persian ice
                                cream ($1.85), dough balls the size of large dates called bamieh (95 cents) and baklava (95
                                cents). Drink fragrant Persian tea, thick Turkish coffee. If you are eating there (as
                                opposed to carrying out, which many customers do), you pick up your silverware, plastic cup
                                and paper napkins, cafeteria style. Small as it is, the place is free of the intrusive scent
                                of cooking oil and very clean. Fresh flowers stand on a shelf. A small caged bird sings
                                along with recorded Middle Eastern music. Though the decor is uninspired and the most that
                                can be said for the furniture is that it serves the purpose for which it is intended, the
                                ambiance created by the host and his interplay with the customers is delightful.</p>
                        </div>
                        <div class="reviews-area-bttm">
                            <img class="img-fluid rev-user-img" src="{{ asset("assets/images/review-user-img-1.png") }}" alt="">
                            <h2 class="rev-user-name">Chicago Tribune</h2>
                            <div class="review-date-area">
                                <span class="review-date">by William Rice</span>
                                <span class="review-date">04/08/1998</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newspaper-reviews-section television-review">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Television Reviews</h1>
                    </div>
                    <div class="media-reviews">
                        <div class="reviews-area-top">
                            <h2 class="review-title">Noon O Kabab restaurant expands in Albany Park</h2>
                            <p class="review-dis-text">CHICAGO (WLS) -- After two decades in business, the venerable Noon O
                                Kabab has expanded across the street. They've added a large catering kitchen, which also now
                                serves as a fast-casual dining destination. It's the same old menu, but now you don't have
                                to wait for a table.</p>
                        </div>
                        <div class="reviews-area-bttm">
                            <img class="img-fluid rev-user-img" src="{{ asset("assets/images/review-user-img-2.png") }}" alt="">
                            <h2 class="rev-user-name">ABC EyeWitness News</h2>
                            <div class="review-date-area">
                                <span class="review-date">by By Steve Dolinsky</span>
                                <span class="review-date">11/12/2016</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newspaper-reviews-section">
            <img class="left-img" src="{{ asset("assets/images/main-side-design.png") }}" alt="">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Radio Reviews</h1>
                    </div>
                    <div class="media-reviews">
                        <div class="reviews-area-top">
                            <img class="img-fluid news-paper-left-img" src="{{ asset("assets/images/newspaper-rev-left-img.png") }}"
                                alt="">
                            <h2 class="review-title">K/RATING of 19/20</h2>
                            <p class="review-dis-text">AMBIANCE/DECOR 3/4 HOSPITALITY 5/5 FOOD 10/10 VALUE 1/1 A guest at a
                                recent dinner party was born in Iran, which prompted my question &quot;What&quot;, I asked,
                                &quot;is the best Iranian or Persian restaurant in the city?&quot; His answer came in the
                                blink of an eye...NOON-O-KABOB, at 466 North Kedzie Avenue. NOON-O-KABAB is in a small
                                corner store front. There are tables with seating for about 30 people. The walls display a
                                small array of Persian carpets and other creations from that complex and often misunderstood
                                land. The sound of Farsi, the native tongue of Persia is heard in conversation at some
                                tables, mixed in with English and an assortment of accents at others. NOON-O-KABAB's owners
                                are brother and sister. He seems most busy back in the small kitchen, while she bustles
                                about tending to customer's needs. We could not have been greeted with more warmth or
                                friendliness. Though she had never seen us before, the hostess did all she could to guide us
                                through the restaurant's menu, with suggestions and explanations. We expressed an interest
                                in eggplant which our dinner party acquaintance particularly estolled. She urged us to try
                                an eggplant which was not on the menu. It had a deep mustard color, odd we thought its
                                flavors were those of mint, lemons which added a bit of sharp bite, some garlic and possible
                                saffron or even turmeric fore the color. It was delicious, especially when spread on the hot
                                puffy bread, or noon, from which the restaurant takes its name. The menu lists several
                                appetizers whose names will easily be recognized by diners familiar with Middle Eastern
                                foods, as well as a few not so familiar. But even before we ordered anything, our hostess
                                brought out a platter with that delicious warm bread, chunks of mild feta cheese and slices
                                tomatoes and onions which seemed to have some light seasoning. The menu has several kebabs,
                                or grilled chicken, lamb and beef' in an array of styles. Skewed Norwegian salmon is an
                                unusual addition, and white fish was also available the night we visited. In the face of so
                                many choices, a combination platter was the puffy noon bread which was much more than a
                                decorative touch. The flavors of the meats and chicken were exceptionally delicious,
                                perfectly cooked, moist and tender. The restaurant serves no liquor, hot tea is recommended.
                                Desserts include Levantine delights such as a honey sweet baklava lavished with ground nuts
                                under a pastry domed crust. Expect to spend about $25 a couple, or less. NOON-O-KABAB is at
                                4661 North Kedzie and has a K/RATING of 19/20.</p>
                        </div>
                        <div class="reviews-area-bttm">
                            <img class="img-fluid rev-user-img" src="{{ asset("assets/images/wbbm.jpg") }}" alt="">
                            <h2 class="rev-user-name">News Radio WBBM</h2>
                            <div class="review-date-area">
                                <span class="review-date">By Sherman Kaplan</span>
                                <span class="review-date">04/23/1999</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newspaper-reviews-section television-review">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Internet Reviews</h1>
                    </div>
                    <div class="revive-main">
                        <div class="media-reviews">
                            <div class="reviews-area-top">
                                <h2 class="review-title">As Fabulous as everyone says it is!</h2>
                                <p class="review-dis-text">A Persian carpet dealer and friend of a friend, strongly
                                    recommended this restaurant. So last night my friend and I went there for dinner - and
                                    the recommendations were spot on. We had the lamb shank (tender, amazingly flavorful),
                                    the vegetarian egglplant plate (words fail me), the Shirin Polo with chicken (which came
                                    with still more fabulous dill rice), and topped it all off with either Zulbia or Bomieh
                                    (both are fried dough with saffron honey syrup...really sweet but also really terrific.
                                    Combined with a bottle of wine, coffee and a baba ghannouj appetizer, our dinner came to
                                    less than $80. The ambience was charming, the service exceptional, and the whole
                                    experience outstanding. I went back for lunch today (take-out), spoke at length with the
                                    very gracious owner, and went away with their renowned salmon plate and something new on
                                    the menue Adass Polo (mis of lentils, raisins, caramelized oneions, saffron and Persian
                                    barberry served with white rice). Wonder what I will get tomorrow?</p>
                            </div>
                            <div class="reviews-area-bttm">
                                <img class="img-fluid rev-user-img" src="{{ asset("assets/images/review-user-img-2.png") }}"
                                    alt="">
                                <h2 class="rev-user-name">Metromix</h2>
                                <div class="review-date-area">
                                    <span class="review-date">By baconbits</span>
                                    <span class="review-date">05/11/2008</span>
                                </div>
                            </div>
                        </div>
                        <div class="media-reviews">
                            <div class="reviews-area-top">
                                <h2 class="review-title">FANTASTIC, DELICIOUS, DIVINE</h2>
                                <p class="review-dis-text">it is truly rare (and i mean RARE) that i come across such good
                                    quality food in Chicago... an absolutely superb food doubled by excellent service (look
                                    for Ms. Mihaela - she is an absolute angel, offering you terrific suggestions, allowing
                                    you to sample before ordering and treating you like a King!). the meat is the most
                                    tender and most delicious i've ever had... the marinating process which they use makes
                                    most meats melt in your mouth (tried chicken, beef and lamb, all grilled) while the dill
                                    rice is made to perfection. the baklavas are the best you will EVER eat in chicago -
                                    they are prepared just as they are in the Middle East - melting in that superb syrup and
                                    infused with the right aromas. tried also the yogurt drink with mint which was also
                                    fantastic. this is in-cre-di-ble! if you have the pleasure to eat there, take 2 minutes
                                    to meet the owner - his philosophy of life substantiates the quality of this restaurant,
                                    the flavors of those inspired recipes and the excellent service to his customers. what a
                                    treat! undoubtedly, this is THE BEST persian food in Chicago. don't miss this place -
                                    this is what a true restaurant should be. Bravo to Noon O'Kabab!!!</p>
                            </div>
                            <div class="reviews-area-bttm">
                                <img class="img-fluid rev-user-img" src="{{ asset("assets/images/review-user-img-2.png") }}"
                                    alt="">
                                <h2 class="rev-user-name">Metromix</h2>
                                <div class="review-date-area">
                                    <span class="review-date">By WEF</span>
                                    <span class="review-date">05/11/2008</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="revive-main">
                        <div class="media-reviews">
                            <div class="reviews-area-top">
                                <h2 class="review-title">Everytime I go there I am treated like family!</h2>
                                <p class="review-dis-text">Everytime I go there I am treated like family! &nbsp;The service
                                    is always there when you need them, it is like they can read your mind. &nbsp;For
                                    instance, &nbsp;I was thinking, &quot;Man I could really use a refill on my water
                                    because I cannot take all of this awesome savory delicious flavor.&quot; &nbsp;Then all
                                    of a sudden my waitress was there with the pitcher asking if there was anything else I
                                    needed with a smile might I add. &nbsp;I everytime I am there I enjoy it. &nbsp;The food
                                    is packed with flavor, and filling without making you feel like you over ate which is
                                    always a plus. &nbsp;The rice is amazing they offer dill which I love and regular
                                    jasmine, but with some butter on the side to make it even more delicious! &nbsp;The
                                    pitas go great with the small platter of veggies and goat cheese they give you as well
                                    as the meat. &nbsp;I go there with my family a lot &quot;I love them&quot; &nbsp;and we
                                    get a type of family platter where the pitas are under the meat giving them flavor and a
                                    different texture that makes it even better. &nbsp;I have to say that this establishment
                                    is one of my favorite place to eat ever due to the service, the atmosphere and the food.
                                    &nbsp;Great for a date and a family night out!</p>
                            </div>
                            <div class="reviews-area-bttm">
                                <img class="img-fluid rev-user-img" src="{{ asset("assets/images/yelp.logo.jpg") }}" alt="">
                                <h2 class="rev-user-name">Yelp</h2>
                                <div class="review-date-area">
                                    <span class="review-date">By Gavin D.</span>
                                    <span class="review-date">05/04/2009</span>
                                </div>
                            </div>
                        </div>
                        <div class="media-reviews">
                            <div class="reviews-area-top">
                                <h2 class="review-title">I'm a fan!</h2>
                                <p class="review-dis-text">Thanks Yelp for helping me discover this place. Tasty, no
                                    nonsense food. Took the wife and mother-in-law and everyone was happy. The Baba Ghannouj
                                    was tasty and our various kebobs were crazy succulent.</p>
                            </div>
                            <div class="reviews-area-bttm">
                                <img class="img-fluid rev-user-img" src="{{ asset("assets/images/yelp.logo.jpg") }}" alt="">
                                <h2 class="rev-user-name">Yelp</h2>
                                <div class="review-date-area">
                                    <span class="review-date">By Brady H.</span>
                                    <span class="review-date">04/28/2009</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media-reviews">
                        <div class="reviews-area-top">
                            <h2 class="review-title">I enjoy the Noon O Kabob. And Albany Park.</h2>
                            <p class="review-dis-text">Every so often I get a taste for Middle Eastern/Persian food. I
                                don't feel guilty eating it because to me, it's healthy.<br /> <br /> We started with the
                                hummus, which was tasty, but next time we'll go with the baba ghannouj. I like the
                                complimentary side plate of herbs, feta, and a few veggies.<br /> <br /> We had the lamb
                                shank and combination plate of ribeye &amp; chicken skewer. The lamb dish was fantastic and
                                if carrots always tasted that good, they would be a staple of my diet. Chicken skewer was
                                also tasty but the ribeye, not so much. &nbsp;Next time we'll probably get a veggie skewer
                                in its place. I'm a big fan of rice so I got the combination of both kinds. Still not sure
                                which one I like better. <br /> <br /> Our waitress was sweet and kept saying
                                &quot;super,&quot; but in a genuine way.<br /> <br /> I washed everything down with a glass
                                of Hirschbach &amp; Sohne Reisling (from website - &nbsp;moderately sweet with ripe apricot,
                                mango, citrus and a mineral finish). Ahhhhhh, satisfying.</p>
                        </div>
                        <div class="reviews-area-bttm">
                            <img class="img-fluid rev-user-img" src="{{ asset("assets/images/yelp.logo.jpg") }}" alt="">
                            <h2 class="rev-user-name">Yelp</h2>
                            <div class="review-date-area">
                                <span class="review-date">By Beth M.</span>
                                <span class="review-date">03/08/2009</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newspaper-reviews-section television-review">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Media Reviews Reviews</h1>
                    </div>
                    <div class="media-reviews">
                        <div class="reviews-area-top">
                            <h2 class="review-title">The MICHELIN Plate : good cooking Fresh ingredients, capably prepared:
                                simply a good meal.</h2>
                            <p class="review-dis-text">A bustling lunch crowd appreciates the welcoming hospitality at this
                                family-run Persian favorite in the heart of the North Side. Intricate tilework and patterned
                                wall hangings offset the closely spaced linen-topped tables and add touches of elegance to
                                the homey space. Kashk-e-bademjan is a savory mash of pan-fried eggplant garnished with
                                caramelized onions and yogurt, perfect while perusing the kebabs on the menu. Succulent,
                                hand-formed lamb koubideh and beef tenderloin skewers are juicy and charred with a hint of
                                spice, and vegetarian offerings like tadiq with ghormeh sabzi play up the textural contrast
                                of crispy pan-browned saffron rice against flavorful stewed spinach. In a hurry? Head across
                                the street to the fast-casual sis for lunch specials.

                                https://www.viamichelin.com/web/Restaurant/Chicago-60625-Noon_O_Kabab-2v35acsx?ref=reviews
                            </p>
                        </div>
                        <div class="reviews-area-bttm">
                            <img class="img-fluid rev-user-img" src="{{ ("assets/images/michel.png") }}" alt="">
                            <h2 class="rev-user-name">Michelin Guide</h2>
                            <div class="review-date-area">
                                <span class="review-date">By MICHELIN guide inspectors</span>
                                <span class="review-date">04/23/2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-subscribe-email/>
    </main>
@endsection



