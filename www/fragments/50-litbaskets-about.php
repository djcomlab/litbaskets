<div id="litbaskets-about" style="display: none; width: 90%; max-width: 90rem; margin: 0 auto; padding: 1rem;">
	<h1>Videos</h1>

	<button onclick='userDidClickVideo(1)'>Video 1</button>
	<button onclick='userDidClickVideo(2)'>Video 2</button>
	<button onclick='userDidClickVideo(3)'>Video 3</button>
	<button onclick='userDidClickVideo(4)'>Video 4</button>

	<div class="InstructionalVideo" id="video1">
		<h2>Video 1</h2>
		<video width="100%" controls>
			<source src="<?php echo $WWW_SERVER ?>videos/video1.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="InstructionalVideo" id="video2" style="display: none;">
		<h2>Video 2</h2>
		<video width="100%" controls>
			<source src="<?php echo $WWW_SERVER ?>videos/video2.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="InstructionalVideo" id="video3" style="display: none;">
		<h2>Video 3</h2>
		<video width="100%" controls>
			<source src="<?php echo $WWW_SERVER ?>videos/video3.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="InstructionalVideo" id="video4" style="display: none;">
		<h2>Video 4</h2>
		<video width="100%" controls>
			<source src="<?php echo $WWW_SERVER ?>videos/video4.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>

	<h1>More Help</h1>

	<h2>
		Do I need Scopus to use Litbaskets.io?
	</h2>
	<p class="litfam_faq_para">
		You will need to have access to Scopus to actually use the search as litbaskets.io uses Scopus to search through content published in IS journals.
		Many universities and research institutes have access to Scopus.
		If you are unsure you can check access using the search function at <a href="https://www.scopus.com/checkaccess.uri">https://www.scopus.com/checkaccess.uri</a>.
		If you don't have access, possibly one of your collaborators has.
	</p>

	<h2>
		How does Litbaskets.io work?
	</h2>
	<p class="litfam_faq_para">
		We have combined multiple listings of IS journals into a master list containing several hundreds of journals. You can see the journals for each list in the 'sources' tab. We then rank journals according to how often they appear across all journal lists to create different 'litbaskets'.
		If you want to know more about how Litbaskets works or if you want to refer to Litbaskets in your
		research, please have a look at our paper:
		<em>
			<a href="https://www.researchgate.net/publication/336868520_wwwlitbasketsio_an_IT_Artifact_Supporting_Exploratory_Literature_Searches_for_Information_Systems_Research">
				www.litbaskets.io, an IT Artifact Supporting Exploratory Literature Searches for Information Systems Research</a></em>.
	</p>

	<h2>
		Can I refine my search?
	</h2>
	<p class="litfam_faq_para">
		Yes, Scopus provides different ways for refining search results that all can be used. Use Litbaskets.io as a starting point to generate a search string to start your search in Scopus, then use the 'refine search' function in Scopus for a successive fractions strategy. More details on different search strategies for improving literature searches are provided in the appendix of this CAIS article: <a href="https://aisel.aisnet.org/cais/vol34/iss1/12/">https://aisel.aisnet.org/cais/vol34/iss1/12/</a>.
	</p>

	<h2>
		I have access to Scopus but when I click search I only get a window with a search string?
	</h2>
	<p class="litfam_faq_para">
		If you select more than ~52 journals the predictable URL for your search is capped. In other words your search will fail. Of courses you can search more than 52 journals but this only works by copy and pasting the search string from Litbaskets.io into the 'advanced search' in Scopus. After you have done this once you will see this is really easy and quickly achieved
	</p>

	<h2>
		Can I see what journals litbaskets.io is searching through?
	</h2>
	<p class="litfam_faq_para">
		Yes using the 'journals' function you can display a list of the journals included in any of our litbaskets.
		You can also customize your search by including or removing additional journals for your search.
		Please note that a direct search in Scopus will only work with up to 51 journals if you search through more journals you will need to copy
		the search string generated for you into the advanced search field in Scopus.
	</p>

	<h2>
		Can I help in further improving Litbaskets.io?
	</h2>
	<p class="litfam_faq_para">
		Litbaskets.io is fully under open source and we are coordinating our development on GitHub (repo: <a href="https://github.com/blairw/litbaskets">blairw/litbaskets</a>).
		We are always looking for volunteers to help us in further developing litbaskets.io.
		For instance, we need help with testing litbaskets.io on as many platforms and browsers as possible. If you come across a bug please report it through GitHub.
	</p>

	<h2>You're missing an important journal, can I make a suggestion?</h2>
	<p class="litfam_faq_para">
		Yes you can! please use our
		<a href="https://docs.google.com/forms/d/e/1FAIpQLSeq5LjmBr_urTG__b4K7lTg6vCbdML7CKT6b9vH9c15cvhwOQ/viewform?usp=sf_link">Google form</a>
		to make suggestions for additional sources.
	</p>
	<h2>Who made this?</h2>
	<p class="litfam_faq_para">
		Product design and implementation by
		<a href="https://business.sydney.edu.au/staff/sebastian.boell">Sebastian Boell</a>
		and
		<a href="https://blair.wang/">Blair Wang</a>.
		Illustration by <a href="https://www.instagram.com/acidyellows/" target="_blank">acidyellows</a>.
	</p>
</div>