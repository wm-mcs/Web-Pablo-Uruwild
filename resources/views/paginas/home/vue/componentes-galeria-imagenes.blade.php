Vue.component('vue-gallery-slideshow' , {
  

 props: {
      images: {
        type: Array,
        required: true
      },
      index: {
        type: Number,
        required: false,
        "default": null
      }
    },
    data: function data() {
      return {
        imgIndex: this.index,
        image: null,
        galleryXPos: 0,
        thumbnailWidth: 120
      };
    },
    computed: {
      imageUrl: function imageUrl() {
        var img = this.images[this.imgIndex];

        if (typeof img === "string") {
          return img;
        }

        return img.url;
      },
      alt: function alt() {
        var img = this.images[this.imgIndex];

        if (_typeof(img) === "object") {
          return img.alt;
        }

        return "";
      },
      isMultiple: function isMultiple() {
        return this.images.length > 1;
      }
    },
    watch: {
      index: function index(val, prev) {
        var _this = this;

        this.imgIndex = val; // updateThumbails when popup

        if (prev == null && val != null) {
          this.$nextTick(function () {
            _this.updateThumbails();
          });
        }
      }
    },
    mounted: function mounted() {
      var _this2 = this;

      window.addEventListener("keydown", function (e) {
        if (e.keyCode === 37) {
          _this2.onPrev();
        } else if (e.keyCode === 39) {
          _this2.onNext();
        } else if (e.keyCode === 27) {
          _this2.close();
        }
      });
    },
    methods: {
      close: function close() {
        this.imgIndex = null;
        this.$emit("close");
      },
      onPrev: function onPrev() {
        if (this.imgIndex === null) return;

        if (this.imgIndex > 0) {
          this.imgIndex--;
        } else {
          this.imgIndex = this.images.length - 1;
        }

        this.updateThumbails();
      },
      onNext: function onNext() {
        if (this.imgIndex === null) return;

        if (this.imgIndex < this.images.length - 1) {
          this.imgIndex++;
        } else {
          this.imgIndex = 0;
        }

        this.updateThumbails();
      },
      onClickThumb: function onClickThumb(image, index) {
        this.imgIndex = index;
        this.updateThumbails();
      },
      updateThumbails: function updateThumbails() {
        if (!this.$refs.gallery) {
          return;
        }

        var galleryWidth = this.$refs.gallery.clientWidth;
        var currThumbsWidth = this.imgIndex * this.thumbnailWidth;
        var maxThumbsWidth = this.images.length * this.thumbnailWidth;
        var centerPos = Math.floor(galleryWidth / (this.thumbnailWidth * 2)) * this.thumbnailWidth; // Prevent scrolling of images if not needed

        if (maxThumbsWidth < galleryWidth) {
          return;
        }

        if (currThumbsWidth < centerPos) {
          this.galleryXPos = 0;
        } else if (currThumbsWidth > this.images.length * this.thumbnailWidth - galleryWidth + centerPos) {
          this.galleryXPos = -(this.images.length * this.thumbnailWidth - galleryWidth - 20);
        } else {
          this.galleryXPos = -(this.imgIndex * this.thumbnailWidth) + centerPos;
        }
      }
    }


















  
});