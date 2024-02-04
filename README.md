<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity Docs</title>
</head>

<body>

    <h2>Issues:</h2>
    <p>
        The process of publishing academic work is fraught with obstacles. The need for intermediaries, such as specialized
        journals, involves payments for publication and annual fees to be a member of institutions like DOI or ISBN, which
        centralize knowledge and hinder its free distribution. This system limits the ability of any academic to
        independently publish their work and protect it against plagiarism. Additionally, it hinders the effective
        demonstration of authors' intellectual property, as publication through intermediaries does not always guarantee
        robust protection against the unauthorized use of academic documents.
    </p>

    <h2>Identity Docs: Decentralized Storage Platform for Technological Universities in Mexico</h2>
    <h3>Main Objective:</h3>
    <p>
        Facilitate the conversion of academic and research papers into NFTs (Non-Fungible Tokens) to prevent plagiarism,
        allowing authors to share their documents for free. Funded through a prepaid blockchain wallet, initially backed
        by third parties with the option to receive community donations.
    </p>

    <h3>Brief Description:</h3>
    <p>
        Identity Docs is a decentralized storage platform aimed at members of Technological Universities in Mexico, where
        their academic or research papers are converted into NFTs that can be freely accessed by anyone.
    </p>

    <h3>Key Benefits:</h3>
    <ul>
        <li>Plagiarism Prevention: Conversion to NFT protects intellectual property and discourages plagiarism of academic
            work.</li>
        <li>Accessibility: NFT files are freely accessible, eliminating the need for user registration to access
            documents.</li>
        <li>Secure Referencing: NFT tokens provide a unique identification for each document, facilitating accurate
            referencing and citation.</li>
    </ul>

    <h2>Proposed Solution:</h2>
    <p>
        Our solution focuses on the development of an academic document search engine for sharing among researchers,
        prioritizing simplicity and accessibility. We emphasize that our platform is freely accessible; no login is
        required to view documents, and the uploading process is streamlined through a form requesting author details and
        the authored file.
    </p>

    <h3>Logical Design:</h3>
    <h4>Document Search Engine:</h4>
    <ul>
        <li>Intuitive user interface for uploading and searching academic documents.</li>
        <li>Implementation of an efficient search system to facilitate locating relevant documents.</li>
    </ul>

    <h4>Simplicity and Accessibility:</h4>
    <ul>
        <li>No need to log in to view documents, ensuring free access to information.</li>
        <li>Simplified uploading process through a form without the need for login, requesting author data and the
            file.</li>
    </ul>

    <h4>SQL Database:</h4>
    <p>We use an SQL database with a single table to manage information efficiently.</p>

    <h4>General Architecture:</h4>
    <p>We use the Laravel framework for the backend, leveraging its MVC structure. The frontend is developed with HTML,
        CSS, and JavaScript. The SQL database integrates to manage data centrally and effectively.</p>

    <h4>Technologies Used:</h4>
    <p>We use the Laravel framework (PHP) for the backend, leveraging its MVC structure. The frontend is developed with
        HTML, CSS, and JavaScript for a responsive user experience, and an SQL Database, structured with a single table
        to manage information systematically.</p>

    <p>With this technological setup, we achieve an accessible and practical solution that allows anyone to share and
        view academic documents on the platform without the need for login, using an SQL database to manage information
        efficiently.</p>

    <h3>Scalability:</h3>
    <p>Future updates implementing blockchain technology and NFTs.</p>

    <h3>Funding Model:</h3>
    <p>The platform is funded through a prepaid wallet backed by a third party, allowing early users to upload their
        documents for free. Subsequently, other users can donate to this prepaid wallet, ensuring the sustainability of
        the service.</p>

    <h3>Intellectual Property:</h3>
    <p>Each researcher creates their NFT in their personal wallet, ensuring exclusive intellectual property rights over
        their academic or research documents.</p>

    <h3>Operation:</h3>
    <p>NFT files can be freely viewed and accessed without the need to create a user account, promoting accessibility to
        information. Additionally, users can reference documents through the tokens provided by NFTs, allowing a unique
        and secure identification of each work.</p>

    <h3>NFT Creation Process:</h3>
    <p>For NFT creation, the author must complete a form with their details, including information from their personal
        wallet. We use canisters to manage transactions, where the prepaid wallet covers the associated gas costs.</p>

</body>

</html>
