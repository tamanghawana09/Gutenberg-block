<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
/* Custom styles for the table */
.testimonial-table {
    margin-top: 30px;
}

.testimonial-table img {
    max-width: 80px;
    /* Adjust the size as needed */
    border-radius: 50%;
    /* Round the image for a more polished look */
    object-fit: cover;
    /* Ensure the image fits well within its container */
}

.testimonial-table th,
.testimonial-table td {
    vertical-align: middle;
    /* Center content vertically */
}

.testimonial-table thead th {
    background-color: #343a40;
    /* Dark background for the header */
    color: #fff;
    /* White text color */
}

.testimonial-table tbody tr:hover {
    background-color: #f1f1f1;
    /* Light grey background on hover */
}

.testimonial-table td {
    text-align: center;
    /* Center-align text in table cells */
}
</style>

<?php
$className = 'testimonial';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className']; // Added space for proper separation
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align']; // Ensure alignment class is added
}
?>

<div class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered table-hover testimonial-table">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Testimonial Text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="<?php echo esc_url(get_field('author_image')); ?>" alt="Author Image">
                            </td>
                            <td><?php echo esc_html(get_field('author_name')); ?></td>
                            <td><?php echo esc_html(get_field('_testimonial_text')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>