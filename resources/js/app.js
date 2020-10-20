require('./bootstrap');


Dropzone.options.dragNDropImages = {
    maxFilesize: 2,
    accept: (file, done) => {
        var regex = new RegExp("(.jpg|.jpeg|.png)$", "i")
        if (regex.test(file.name)) {
            return done();
        }
        return done('The file must be an image')
    }
}