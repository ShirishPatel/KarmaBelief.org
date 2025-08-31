'use strict';

document.addEventListener('DOMContentLoaded', function () {
  const fileInputs = document.querySelectorAll('.account-file-input');
  const resetButtons = document.querySelectorAll('.account-image-reset');

  fileInputs.forEach((fileInput) => {
    const previewImage = fileInput.closest('.button-wrapper').previousElementSibling;

    if (previewImage) {
      const resetImage = previewImage.src;

      fileInput.addEventListener('change', () => {
        if (fileInput.files[0]) {
          previewImage.src = URL.createObjectURL(fileInput.files[0]);
        }
      });

      resetButtons.forEach((resetButton) => {
        resetButton.addEventListener('click', () => {
          const relatedInput = resetButton.previousElementSibling.querySelector('input[type="file"]');
          if (relatedInput === fileInput) {
            fileInput.value = '';
            previewImage.src = resetImage;
          }
        });
      });
    }
  });
});
