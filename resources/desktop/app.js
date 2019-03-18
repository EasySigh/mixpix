const Uppy = require('@uppy/core')
const XHRUpload = require('@uppy/xhr-upload')
const Dashboard = require('@uppy/dashboard')
const Instagram = require('@uppy/instagram')
const Tus = require('@uppy/tus')

var $ = require("jquery");
import 'bootstrap';
import './gridly.js';
import './js/main.js';
import './js/gallery.js';


const uppy = Uppy({
	id: 'uppy',
	debug: true,
	autoProceed: false,
	restrictions: {
		maxFileSize: 1000000,
		maxNumberOfFiles: 1,
		minNumberOfFiles: 1,
		allowedFileTypes: ['image/*']
	}
})
.use(Dashboard, {
	trigger: '.upload_tab',
	inline: true,
	target: '#dragDrop',
	replaceTargetContent: true,
	showProgressDetails: true,
	note: '',
	height: 158,
	metaFields: [
		{ id: 'name', name: 'Name', placeholder: 'file name' },
		{ id: 'caption', name: 'Caption', placeholder: 'describe what the image is about' }
	],
	browserBackButtonClose: true
})
// .use(Instagram, { target: Dashboard, serverUrl: 'https://companion.uppy.io' })
// .use(Tus, { endpoint: 'https://master.tus.io/files/' })

uppy.on('file-added', (file) => {
	console.log('File path:', file);
})