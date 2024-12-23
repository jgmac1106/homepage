<!DOCTYPE html>
<?php include 'head.php'; ?>
</head>
<?php include 'header.php'; ?>
    </header>
  <main class="longreads">   
  <article class="h-entry">
  <h1 class="p-name">Tito Tutorial</h1>
  <div class="pubinfo">
  <p>Published by <a class="p-author h-card" href="https://jgregorymcverry.com">J. Gregory McVerry</a>
     on <time class="dt-published" datetime="2019-07-28 06:41:00">28<sup>th</sup> July 2019</time></p>
    <p>
      Updated <time class="dt-updated" datetime="2019-08-29 07:42:00">9<sup>th</sup>August 2019</time></p>
   
  <span class="summary">
    <p class="p-summary">A tutorial for making an IndieWeb Event</p>
    </span>
 </div>
    <div class="copy">
  <div class="e-content">
  <h2>
    Make the Event
    </h2>
    <ol>
      <li>Sign into Ti.to</li>
      <li>Click on New Event</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%207.39.48%20AM.png?v=1565350833979" alt="screenshot of ti.to sign in">
      <li>On the next screen you are prompted to choose an account. Choose IndieWebCamp</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%207.39.57%20AM.png?v=1565350835450" alt="screenshot of choose account">
      <li>You then add a name to the Evet. Use IndieWebCamp, Followed by City, Followed by Year. As an example "IndieWebCamp NYC 2019"</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%207.36.01%20AM.png?v=1565350828532" alt="screenshot of quick guide">
      <li>Next use the quick set up guide. Select paid event with no taxes</li>
    </ol>
    <h2>
      Make Tickets
    </h2>
      <ol>
      <li>Next you make your first ticket by clicking on tickets</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%207.39.48%20AM.png?v=1565350833979" alt="screenshot of new ticket">
      <li>Name the First Ticket Regular</li>
      <li>Use this description<blockquote>
        The registration fee helps cover the cost of food and drinks during the event. We don't want the fee to prevent anyone from being able to attend, so please contact  	&#60;a href="mailto:hello@indieweb.org" &#62;the organizers 	&#60;/a&#62; if you need a discount code.
        </blockquote></li>
      <li>Choose a time for the ticket to go live. All times are UTC. Check you UTC time</li>
      <li>Set a ticket limit based on expectations and venue size. Expect a ~50% no show rate</li>
      <li>Set the price for $10 dollars US for the regular ticket</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.09.36%20AM.png?v=1565352625424" alt="screenshot of completed first ticket">
      <li>Next click on add an another ticket</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.09.48%20AM.png?v=1565352626405" alt="screenshot of add another ticket">
    </ol>
   <li>We will make a ticket for IndieRSVP</li>
    <li>Use this as your description: <blockquote>
      If you post an RSVP from your site to the event page &#60;a href="https://YEAR.indieweb.org/CITY"&#62; YEAR.indieweb.org/CITY&#60;/a&#62;, you can register for this free "Indie RSVP" ticket.
      </blockquote></li>
    <li>Change the url to match your year and city</li>
    <li>Set this ticket price to zero</li>
    <li>Select add another ticket</li>
    <li>Next Make the Support the IndieWeb ticket</li>
    <li>Use this as the description:<blockquote>
      If you would like contribute to the IndieWeb  sponsorship fund, add this ticket to your registration and choose an amount to contribute. All proceeds will go towards covering the costs of the event and our year-round activities. Contributions will remain anonymous. Alternatively, you can become a monthly supporter here: &#60;a href="https://opencollective.com/indieweb"&#62;opencollective.com/indieweb&#60;/a&#62;
      </blockquote></li>
    <li>Under cost click on options and switch to Dontation/Pay what you like</li>
    <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.26.52%20AM.png?v=1565353624838" alt="screenshot of donation choice">
    <li>Set the suggested to $10 and the minumum to $5</li>
    <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.27.57%20AM.png?v=1565353827015" alt="screenshot of prices">
    <li>Next make the ticket for the Support the Travel Fund</li>
    <li>Use this as the description: <blockquote>
      If you would like to contribute to the travel assistance fund to help people from underrepresented groups attend future IndieWebCamp events, add this ticket to your registration and choose an amount to contribute. All proceeds from this will go towards the travel assistance fund to be able to bring more people to events! Contributions will remain anonymous.
      </blockquote></li>
    <li>Then set the price to options</li>
    <li>Set the suggested donation to $100 and the minimum to $25</li>
    <li>We will now make the last ticket type for remote tickets</li>
    <li>The description is <blockquote>
      Please register for this remote participation ticket if you would like to join [EVENT NAME] remotely! You can read more about &#60;a href="https://indieweb.org/2019#Remote_Participation"&#62;remote participation here&#60;/a&#62;.
      </blockquote></li>
    <li>You set the quantity to unlimited and the price to free</li>
      </div>
      <li>We have now made all the tickets and will now finish the event</li>
      <h2>
        Customize Event Settings
      </h2>
      <p>
        We will now personalize the tito page to your event. We will add basic information, location, and customise the home pahe
      </p>
      <h3>
        Basic Settings
      </h3>
      <ol>
      <li>Click on Customize in the left hand toolbar</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.46.36%20AM.png?v=1565354896233" alt="screenshot of admin">
      <li>First we will add the event details on the Basics Tab</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%208.47.34%20AM.png?v=1565354896143" alt="screenshot of basic tab">
      <li>Add your dates</li>
      <li>Switch the contact email to: hello@indieweb.org</li>
      <li>Click Save</li>
      </ol>
      <h3>
        Location Settings
      </h3>
      <ol>
        <li>Click on location</li>
      <li>Enter in Your location detials</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%2010.21.53%20AM.png?v=1565360615254" alt="screenshot of location details">
      <li>Click on Edit Position on Map</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%2010.22.04%20AM.png?v=1565360617067" alt="screenshot of edit map">
      <li>Then choose drop pin</li>
      <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%2010.22.13%20AM.png?v=1565360619032" alt="screnshot of drop pin">
      </ol>
      <h2>
        Customize Homepage
      </h2>
      <ol>
        <li>To find a custom logo go to the IndieWeb <a href="https://indeweb.org/logo">logo</a> page and download the logo labled ti.to (coming soon)</li>
        <li>Upload the logo to Ti.to</li>
        <li>Add the custom description:<blockquote>
          Join us for the X gathering  for independent web creators of all kinds, from graphic artists, to designers, UX engineers, coders, hackers, to share ideas, actively work on creating for their own personal websites, and build upon each others creations.
          </blockquote></li>
        <li>To find out how many previous IndieWebCamps there have been in your city you can check the wiki. For example New York's page is <a href="https://indieweb.org/NYC">https://indieweb.org/NYC</a></li>
        <li>Add any mission critical information in the "extra information box"</li>
        <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%2010.56.19%20AM.png?v=1565362599993" alt="screenshot of completed homepage">
        <li>Under homepage options check off "show remaining tickets"</li>
        <li>Then set the time zone to your local GMT time</li>
        <img src="https://cdn.glitch.com/055438aa-8d6a-403c-a7ff-c97119f02627%2FScreen%20Shot%202019-08-09%20at%2011.03.04%20AM.png?v=1565362995843" alt="screenshot of time selector">
        
      </ol>
      <p>
        Save the ticket and you are done
      </p>
      <h2>
        The End
      </h2>
    </div>
    </article>
    </main>
    <footer>
<?php include 'footer.php'; ?>

  </body>

</html>
