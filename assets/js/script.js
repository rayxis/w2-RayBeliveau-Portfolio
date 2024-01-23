class PageData {
	// Elements
	elements = {
		aboutMe: document.querySelector('#about_me article'),
		contact: document.querySelector('#contact_me menu'),
		work:    document.querySelector('#work ul')
	};
	// Templates
	templates = {
		contact: document.querySelector('#template-contact').content,
		work:    document.querySelector('#template-work').content
	};

	constructor(dataFile) {
		// Load and process the JSON data file
		fetch(dataFile).then(response => response.json())
		                    .then(data => {
			                    this.fillAbout(data.about);
			                    this.fillContact(data.contact);
			                    this.fillWork(data.work);
		});
	}

	fillAbout(aboutData) {
		// Loop through each about item and create a new paragraph
		aboutData.forEach(paragraph => {
			const pElement       = document.createElement('p');
			pElement.textContent = paragraph;
			this.elements.aboutMe.appendChild(pElement);
		});
	}

	fillContact(contactData) {
		// Loop through each contact item, and create a new list item element.
		contactData.forEach(contact => {
			const liElement = this.templates.contact.cloneNode(true).firstElementChild;
			const image     = liElement.querySelector('img');
			const link      = liElement.querySelector('a');

			// Add the class to the list item, fill the image and link information.
			liElement.classList.add(contact.class);
			image.alt        = contact.alt;
			image.src        = contact.icon;
			link.href        = contact.link;
			link.textContent = contact.content;

			// Add the list item to the list.
			this.elements.contact.appendChild(liElement);
		});
	}

	fillWork(workData) {
		// Loop through each work item, and create a new list item element.
		workData.forEach(work => {
			const liElement = this.templates.work.cloneNode(true).firstElementChild;
			const link      = liElement.querySelector('a');
			const skills    = liElement.querySelector('p');
			const title     = liElement.querySelector('h3');

			// Set the background image
			liElement.style.backgroundImage = `url("${work.image}")`;

			// Set the link, skills and title information.
			link.href          = work.link;
			skills.textContent = work.skills;
			title.textContent  = work.title;

			// Add the list item to the list.
			this.elements.contact.appendChild(liElement);
		});
	}
}

// Load the page data class
const pd = new PageData('data.json');