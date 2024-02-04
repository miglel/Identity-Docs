Issues:
The process of publishing academic work is fraught with obstacles. The need for intermediaries, such as specialized journals, involves payments for publication and annual fees to be a member of institutions like DOI or ISBN, which centralize knowledge and hinder its free distribution. This system limits the ability of any academic to independently publish their work and protect it against plagiarism. Additionally, it hinders the effective demonstration of authors' intellectual property, as publication through intermediaries does not always guarantee robust protection against the unauthorized use of academic documents.
Identity Docs: Decentralized Storage Platform for Technological Universities in Mexico
Main Objective:
Facilitate the conversion of academic and research papers into NFTs (Non-Fungible Tokens) to prevent plagiarism, allowing authors to share their documents for free. Funded through a prepaid blockchain wallet, initially backed by third parties with the option to receive community donations.
Brief Description:
Identity Docs is a decentralized storage platform aimed at members of Technological Universities in Mexico, where their academic or research papers are converted into NFTs that can be freely accessed by anyone.
Key Benefits:
Plagiarism Prevention: Conversion to NFT protects intellectual property and discourages plagiarism of academic work.
The Education Futura website asserts that plagiarism is "one of the main obstacles and problems faced by academic communities of all kinds."
According to Markus Ptnings, an overview of existing NFT service providers in the publishing environment illustrates that there is still no suitable one for researchers.
Accessibility: NFT files are freely accessible, eliminating the need for user registration to access documents.
Secure Referencing: NFT tokens provide a unique identification for each document, facilitating accurate referencing and citation.
Eliminate the triangular relationship between researchers and publishers registering Unique Research Documents (DOI), some of which have exclusive usage rights transferred to themselves. This complexity could be reduced by registering NFTs only for open-access publications with a Creative Commons Attribution license. A summary and perspective provide an overview of open questions and initial points to start.
Proposed Solution:
Our solution focuses on the development of an academic document search engine for sharing among researchers, prioritizing simplicity and accessibility. We emphasize that our platform is freely accessible; no login is required to view documents, and the uploading process is streamlined through a form requesting author details and the authored file.
Logical Design:
Document Search Engine:
Intuitive user interface for uploading and searching academic documents.
Implementation of an efficient search system to facilitate locating relevant documents.
Simplicity and Accessibility:
No need to log in to view documents, ensuring free access to information.
Simplified uploading process through a form without the need for login, requesting author data and the file.
SQL Database:
We use an SQL database with a single table to manage information efficiently.
General Architecture:
We use the Laravel framework for the backend, leveraging its MVC structure. The frontend is developed with HTML, CSS, and JavaScript. The SQL database integrates to manage data centrally and effectively.
Technologies Used:
We use the Laravel framework (PHP) for the backend, leveraging its MVC structure. The frontend is developed with HTML, CSS, and JavaScript for a responsive user experience, and an SQL Database, structured with a single table to manage information systematically.
With this technological setup, we achieve an accessible and practical solution that allows anyone to share and view academic documents on the platform without the need for login, using an SQL database to manage information efficiently.
Scalability: Future updates implementing blockchain technology and NFTs.
Funding Model:
The platform is funded through a prepaid wallet backed by a third party, allowing early users to upload their documents for free.
Subsequently, other users can donate to this prepaid wallet, ensuring the sustainability of the service.
Intellectual Property:
Each researcher creates their NFT in their personal wallet, ensuring exclusive intellectual property rights over their academic or research documents.
Operation:
NFT files can be freely viewed and accessed without the need to create a user account, promoting accessibility to information.
Additionally, users can reference documents through the tokens provided by NFTs, allowing a unique and secure identification of each work.
NFT Creation Process:
For NFT creation, the author must complete a form with their details, including information from their personal wallet.
We use canisters to manage transactions, where the prepaid wallet covers the associated gas costs.


