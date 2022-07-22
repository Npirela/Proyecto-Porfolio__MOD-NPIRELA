import React from 'react';

function Slideshare(props) {
	const title = props.title || "slideshare";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M61.8 30.2c-.4-.3-1-.3-1.4-.1-.4.1-.7.4-1.3.7v-.7V7.4c0-1.5-.3-2.9-1.4-4.2-.7-1.1-2-1.7-3.2-2-.1 0-.1-.1-.3-.1H9.5c-.7.2-1.4.5-2.1.9C5.8 3 5 4.4 4.7 6.2v24.7c-.1-.1-.3-.1-.6-.3s-.7-.4-1-.4c-.8-.3-1.5.3-1.4 1.3.1.6.3 1.1.6 1.4 1.4 1.7 3.2 3.2 5.2 4.5 2.2 1.4 4.5 2.7 6.9 3.8.1.1.1.1.3.1-.1.8-.4 1.7-.6 2.5-.4 2.2-.8 4.5-.6 6.7.1 2.8 1 5.5 2.7 7.9 1.7 2.4 4.1 3.9 7 4.3.1 0 .3.1.4.1h1.8c.6-.1 1.1-.3 1.7-.4 2.2-.7 3.9-2.9 3.9-5.3.1-3.9.1-7.9.1-11.6v-.7c.6.1 1 .3 1.4.4.1.1.1.3.1.4 0 3.2 0 6.6.1 10 0 1.1 0 2.1.3 3.2.7 2.4 2.5 3.6 4.8 4.1.1 0 .3.1.4.1H40c1.1-.3 2.2-.6 3.2-1.1 2.5-1.1 4.2-3.2 5.3-5.6 1.4-3.1 1.7-6.3 1.3-9.7-.1-1.5-.6-3.1-.8-4.6 0-.1-.1-.3-.1-.4.8-.4 1.7-.7 2.5-1.1 2.9-1.4 5.9-3.2 8.3-5.3.7-.7 1.4-1.7 2.1-2.4.1-.1.1-.4.1-.6.5-1.2.3-1.7-.1-2zm-6 2.8c-2.4 1.1-4.6 2.1-7 2.7-3.5.7-7 1-10.5.7-.8-.1-1.8-.1-2.7.1-1.4.1-2.4 1-2.5 2.5 0 .1-.1.1-.1.3-.8-.7-1.7-1.4-2.5-2.1-.7-.6-1.4-.7-2.2-.7-2 0-4.1.1-6 .1-4.8-.1-9.1-1.1-13.5-3.2-.1-.1-.3-.3-.3-.6 0-7.9 0-15.9.1-23.7 0-.8.1-1.5.4-2.4.3-1.3 1.3-1.8 2.4-2.1.7-.1 1.5-.1 2.2-.1h37.6c1 0 2 0 2.9.4 1.3.6 1.8 1.5 2.1 2.8.1.7.1 1.7.1 2.4v22.3c0 .2-.1.3-.5.6z"/>
		<path d="M17.8 22.6c-1.5 2-1.8 4.3-.7 6.6 1.4 2.8 3.8 4.1 6.6 4.2 1.8-.1 3.4-.6 4.8-1.4 3.5-2.4 3.8-7.4.7-10.4-3.4-3.2-8.8-2.8-11.4 1z"/>
		<path d="M45.8 21.1c-3.5-2.5-8.3-1.8-10.7 1.4-1.5 2.1-1.8 4.5-.7 6.9 1.4 2.8 3.8 3.9 6.6 4.1 2.1-.1 3.9-.7 5.3-2 3.2-2.9 2.9-8.1-.5-10.4z"/>
	</g>
</svg>
	);
};

export default Slideshare;