import React from 'react';

function Key(props) {
	const title = props.title || "key";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M60.7 44.2L48.8 32.3c-2.8-2.7-7.2-2.7-10 0l-2 2L11 7.3l-.3-.3c-.1 0-.1-.1-.2-.1L5.7 1.8c-.7-.7-1.8-.7-2.5-.1-.7.7-.7 1.8 0 2.5l3.9 4.1-5.3 5.6c-.7.7-.6 1.8.1 2.5.3.3.8.5 1.2.5.5 0 .9-.2 1.3-.5l5.2-5.5 6.6 6.9-7.7 8c-.7.7-.6 1.8.1 2.5.3.3.8.5 1.2.5.5 0 .9-.2 1.3-.5l7.6-7.9 15.8 16.5-2 2c-2.8 2.8-2.7 7.2 0 10l11.8 12c1.4 1.4 3.2 2.1 5 2.1 1.8 0 3.6-.7 5-2.1l6.5-6.4c1.3-1.3 2.1-3.1 2.1-5s-.9-4-2.2-5.3zm-2.5 7.5l-6.5 6.4c-1.4 1.4-3.6 1.4-5.1 0L34.8 46.3c-1.4-1.4-1.4-3.6 0-5l3.1-3.1h.1l.1-.1 3.2-3.2c.7-.7 1.6-1.1 2.5-1.1.9 0 1.8.4 2.5 1.1l11.8 11.9c.7.7 1.1 1.6 1.1 2.6s-.3 1.7-1 2.3z"/>
	</g>
</svg>
	);
};

export default Key;