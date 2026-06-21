const MIN_PAGE = 1;
const MAX_PAGE = 7;

if (!window.pageListingButtonsInitialized) {
	window.pageListingButtonsInitialized = true;
	initPageListingButtons();
}

function getCurrentPage() {
	const match = window.location.pathname.match(/\/page(\d+)/);
	return match ? parseInt(match[1], 10) : 1;
}

function getBaseUrl() {
	return window.location.origin;
}

function getPageUrl(page) {
	return `${getBaseUrl()}/page${page}`;
}

function createPageButton({ label, href, positionClass, ariaLabel }) {
	const button = document.createElement('a');
	button.className = `page-listing-nav-button ${positionClass}`;
	button.href = href;
	button.textContent = label;
	button.setAttribute('aria-label', ariaLabel);
	return button;
}

function initPageListingButtons() {
	const body = document.body;
	if (!body) {
		return;
	}

	if (document.querySelector('.page-listing-nav-button')) {
		return;
	}

	const currentPage = getCurrentPage();

	if (currentPage > MIN_PAGE) {
		const previousPage = currentPage - 1;
		const previousButton = createPageButton({
			label: '← Previous',
			href: getPageUrl(previousPage),
			positionClass: 'page-listing-nav-button--prev',
			ariaLabel: `Go to page ${previousPage}`,
		});

		body.appendChild(previousButton);
	}

	const nextPage = currentPage >= MAX_PAGE ? MIN_PAGE : currentPage + 1;
	const nextButton = createPageButton({
		label: 'Next →',
		href: getPageUrl(nextPage),
		positionClass: 'page-listing-nav-button--next',
		ariaLabel: `Go to page ${nextPage}`,
	});

	body.appendChild(nextButton);
}
