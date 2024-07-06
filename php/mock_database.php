<?php
function getEventsFromDatabase() {
    $events = array(
        array(
            'id' => 1,
            'title' => 'Effective Negotiations',
            'speaker' => 'PROF. PERRY ATWAL',
            'date' => '14 & 28 Sep., 2024',
            'time' => '12:00-14:00',
            'location' => 'NYU Zoom',
            'description' => 'This two-part workshop series aims to enhance managers\' negotiation skills, enabling them to effectively communicate with various stakeholders and achieve their goals in daily operations. Participants will learn to develop analytical abilities and negotiation strategies to create and implement superior solutions.',
            'image_url' => './images/negotiation.png',
            'image_alt' => 'People in a meeting',
            'pdf_url' => './pdf/perry-atwal-f2021.pdf'
        ),
        array(
            'id' => 3,
            'title' => 'Decision Making and Leadership',
            'speaker' => 'PROF. JUSTIN G. BULL',
            'date' => '5 & 19 Oct., 2024',
            'time' => '14:00-16:00',
            'location' => 'NYU Tandon, Room 370',
            'description' => 'This two-part workshop series focuses on improving decision-making skills in complex environments. Participants will learn to identify common pitfalls, apply mitigation techniques, and develop strategies for making more effective choices at individual, organizational, and systems levels, using real-life examples and a case study of a Mt. Everest expedition.',
            'image_url' => './images/decision_making.png',
            'image_alt' => 'People are making decisions',
            'pdf_url' => './pdf/justin-g-bull-f2021.pdf'
        ),
        array(
            'id' => 5,
            'title' => 'Successful Storytelling to Land Your Job & Grant',
            'speaker' => 'MS. DASHA RETTEW',
            'date' => '2 & 16 Nov., 2024',
            'time' => '10:00-12:00',
            'location' => 'Online Webinar',
            'description' => 'This two-part workshop series, led by Dasha Rettew, focuses on mastering the art of storytelling for PhD students. Participants will learn emotional intelligence-based techniques to craft compelling personal narratives, develop effective elevator pitches, and create engaging "hooks" to enhance their career prospects and grant applications.',
            'image_url' => './images/storytelling.png',
            'image_alt' => 'A book about storytelling',
            'pdf_url' => './pdf/dasha-rettew-f2021.pdf'
        ),
        array(
            'id' => 7,
            'title' => 'Coming Soon',
            'speaker' => 'NYU TANDON',
            'date' => '7 & 21 Dec., 2024',
            'time' => '10:00-12:00',
            'location' => 'Online Webinar',
            'description' => 'Coming Soon',
            'image_url' => './images/image_placeholder.png',
            'image_alt' => 'A placeholder for images',
            'pdf_url' => '#'
        )
    );

    return $events;
}
?>