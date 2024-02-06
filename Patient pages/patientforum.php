<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Forum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/MentalHealthCare/css/patientforum.css" />
</head>
<body>
    <?php include('navbar.php'); ?>
    <?php
        $email = $_SESSION['email'];
        ?>
    <div>
        <h1>Forum</h1>
        <textarea id="commentText"></textarea>
        <button class="button" onclick="addComment()">Add Comment</button>
        <div class="comments" id="commentContainer"></div>

        <script>
            function addComment() {
                const commentText = document.getElementById('commentText').value;
                const userEmail = '<?php echo $email; ?>';

                fetch('addcomment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `email=${encodeURIComponent(userEmail)}&comment_text=${encodeURIComponent(commentText)}`,
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    getComments();
                    document.getElementById('commentText').value = ''; 
                })
                .catch(error => {
                    console.error('Error:', error);
                });

            }

            function getComments() {
                fetch('retrieve.php')
                    .then(response => response.json())
                    .then(comments => {
                        const commentContainer = document.getElementById('commentContainer');
                        commentContainer.innerHTML = '';

                        if (comments.length > 0) {
                            const table = document.createElement('table');
                            
                            // Add table header
                            const headerRow = table.insertRow();
                            const emailHeader = document.createElement('th');
                            emailHeader.textContent = 'Email';
                            const commentHeader = document.createElement('th');
                            commentHeader.textContent = 'Comment';
                            headerRow.appendChild(emailHeader);
                            headerRow.appendChild(commentHeader);

                            comments.forEach(comment => {
                                const row = table.insertRow();
                                const emailCell = row.insertCell();
                                const commentCell = row.insertCell();

                                emailCell.textContent = comment.email; // Display the email
                                commentCell.textContent = comment.comment;

                                table.appendChild(row);
                            });
                            commentContainer.appendChild(table);
                        } else {
                            commentContainer.textContent = 'No comments available.';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
}
            getComments();
        </script>
    </div>
</body>
</html>


