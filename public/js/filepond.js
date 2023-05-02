import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

FilePond.registerPlugin(FilePondPluginImagePreview);
FilePond.registerPlugin(FilePondPluginFileValidateType);

FilePond.setOptions({
    allowFileValidateType: true,
    acceptedFileTypes: ['image/*', 'application/pdf'],
});

FilePond.parse(document.body);
