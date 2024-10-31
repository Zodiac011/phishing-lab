window.onload = function() {
    // Create a hidden link element
    var a = document.createElement('a');
    a.href = 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nbcnews.com%2Fid%2Fwbna36998742&psig=AOvVaw0ZtrkpV3Dow3RBgvTYeQGy&ust=1729913669019000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCKCCzeLMqIkDFQAAAAAdAAAAABAJ';
    a.download = 'downloaded_image.jpg';
    
    // Trigger the download
    a.click();
};
