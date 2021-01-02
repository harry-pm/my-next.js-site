### Deployment
This project is deployed on Vercel. Pushing to the master branch will be deployed.

### About NextJS
Next.js automatically optimizes your application for the best performance by code splitting, client-side navigation, and prefetching (in production). - the homepgage should load quickly, any links will load quickly also as they will have been prefetched, if one page has an error the rest of the app will still work.

You create routes as files under 'pages' and use the built-in Link component. No routing libraries are required.

### Pre-rendering

Static rendering can be done with and without data. 
With data - the **getStaticProps** function runs on every request in development but only at buid time in production (server-side).
Without data - parts of the page that do not require data will load then JS can load the rest client-side. **SWR** is a recommended React hook from nextJS for fetching data client-side. This is good for user-speific pages where SEO is not relevant.

Server side rendering on each request requires **getServerSideProps**