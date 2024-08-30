Here's a detailed `README.md` for the testimonial block you created, suitable for GitHub:

---

# Testimonial Block

A custom WordPress block that displays a testimonial in a table format. This block is built using Advanced Custom Fields (ACF) and styled with Bootstrap.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Block Details](#block-details)
- [Customization](#customization)

## Features

- Displays testimonials in a table with a clean, responsive design.
- Uses Bootstrap 5 for styling, ensuring a modern look and feel.
- Customizable via ACF fields, allowing easy updates without modifying the code.
- Fully responsive, with support for custom avatars and testimonial texts.

## Installation

### Prerequisites

- WordPress version 5.8 or higher.
- The Advanced Custom Fields (ACF) plugin installed and activated.

### Steps

1. **Clone or Download the Repository**  
   Clone this repository to your WordPress theme's directory:

   ```bash
   git clone https://github.com/yourusername/testimonial-block.git
   ```

2. **ACF Block Registration**  
   Ensure the block is registered by including the following code in your theme's `functions.php` file:

   ```php
   // Register ACF block types only if ACF is active
   if (class_exists('ACF')) {
       add_action('acf/init', 'register_acf_block_types');
   }
   
   function register_acf_block_types() {
       acf_register_block_type(array(
           'name'              => 'testimonial',
           'title'             => __('Testimonial'),
           'description'       => __('A custom testimonial block.'),
           'render_template'   => 'template-parts/blocks/testimonial/testimonial-block.php',
           'icon'              => 'editor-paste-text',
           'keywords'          => array('testimonial', 'product'),
       ));
   }
   ```

3. **Enqueue Styles**  
   Add the following code to enqueue the custom styles for the testimonial block:

   ```php
   function enqueue_testimonial_block_styles() {
       wp_enqueue_style('testimonial-block', get_template_directory_uri() . '/css/testimonial-block.css');
   }
   add_action('wp_enqueue_scripts', 'enqueue_testimonial_block_styles');
   ```

4. **Add the Block Template**  
   Copy the `testimonial-block.php` file to your theme's `template-parts/blocks/testimonial/` directory.

5. **Create ACF Fields**  
   Create the following ACF fields in the ACF interface:
   
   - **Author Image:** Image field to upload the author's avatar.
   - **Author Name:** Text field for the author's name.
   - **Testimonial Text:** Textarea field for the testimonial content.

## Usage

### Adding the Block

1. Go to any page or post where you want to add the testimonial block.
2. Click the “+” button to add a new block.
3. Search for `Testimonial` and select it.
4. Fill in the required fields (Author Image, Author Name, Testimonial Text) using the ACF interface.
5. Save or publish your page/post.

### Example Output

The block will display a testimonial in a table format with the following columns:

- **Avatar**: A circular avatar image of the author.
- **Name**: The name of the author.
- **Testimonial Text**: The testimonial provided by the author.

## Block Details

### Template File

The block template is located at:
`template-parts/blocks/testimonial/testimonial-block.php`

### ACF Fields

This block relies on the following ACF fields:

- `author_image`: The avatar of the testimonial author.
- `author_name`: The name of the testimonial author.
- `_testimonial_text`: The content of the testimonial.

### Custom Styles

Custom styles for the block are defined in:
`css/testimonial-block.css`

### Bootstrap Integration

Bootstrap 5 is included via a CDN in the template file to ensure consistent styling.

## Customization

### Styling

To modify the appearance of the testimonial table, you can edit the CSS in `testimonial-block.css`. The main classes used include:

- `.testimonial-table`: Main class for the table.
- `.testimonial-table img`: Styling for the avatar image.
- `.testimonial-table th, .testimonial-table td`: General styling for table headers and cells.

### Adding Additional Fields

To add more fields to the testimonial block:

1. Create a new ACF field.
2. Update the `testimonial-block.php` template to render the new field.
3. Apply any necessary styling in `testimonial-block.css`.

---

This `README.md` provides detailed instructions for developers to set up, use, and customize the testimonial block on a WordPress site. Let me know if you need any further adjustments or additions!
<hr>
<h3>Code with peace ✌️</h3>