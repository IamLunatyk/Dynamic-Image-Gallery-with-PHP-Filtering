This project is a dynamic image gallery that showcases how to use PHP to filter and display images based on user-selected categories. The gallery is built using HTML for structure, CSS for styling, and PHP for dynamic content rendering.

How It Works:
Filtering Images:

The gallery displays a set of images that can be filtered by categories such as "Towns", "Cars", "Nature", and "Electronics".

The filtering is done using PHP. When a user clicks on a filter option, the page reloads with a filter parameter in the URL (e.g., ?filter=city).

PHP checks the filter parameter and displays only the images that match the selected category. If no filter is selected, all images are shown.

Dynamic Image Loading:

The images are loaded dynamically using the https://picsum.photos API, which provides random placeholder images. Each image is assigned a random number to ensure uniqueness.

The gallery generates 12 images by default, but this can be easily adjusted by modifying the $totalImages variable in the PHP code.

Refresh Button:

The gallery includes a "Refresh" button that reloads the page and fetches new random images from the picsum.photos API. This is achieved using a simple PHP form that triggers a page refresh when the button is clicked.

Active Filter Highlighting:

The currently selected filter is highlighted using the active class. This is done by checking the filter parameter in the URL and applying the active class to the corresponding filter option.

Key Features:
Category Filtering: Users can filter images by different categories.

Dynamic Image Loading: Images are loaded dynamically and can be refreshed to display new ones.

Responsive Design: The gallery is designed to be responsive and works well on different screen sizes.

Simple and Clean Code: The code is easy to understand and can be extended with additional features or categories.

Technologies Used:
HTML: For structuring the gallery and filter options.

CSS: For styling the gallery, filter menu, and buttons.

PHP: For dynamic filtering and image loading.

Picsum Photos API: For generating random placeholder images.

This project is a great example of how to create a simple yet dynamic web application using PHP and basic web technologies. It can be used as a starting point for more complex image galleries or filtering systems.
