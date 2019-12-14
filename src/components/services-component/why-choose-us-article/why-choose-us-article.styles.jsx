import styled from 'styled-components';

export const WhyChooseUsArticleWrapper = styled.article`

    margin: 5rem 1rem;
    text-align: center;
    background: #FFFFFF;
    border: 0.5px solid #000000;
    padding: 2rem;
    /* box-sizing: border-box; */
    /* card */

    box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.06);
    border-radius: 13.5px;
    height: 330px;

    div {
        margin: 2rem 0;
    }

    h2 {
        margin: 1rem 0;
        font-size: 30px;
        line-height: 35px;
        text-align: center;
        font-weight: 900;
        letter-spacing: -0.02em;

        /* brown */

        color: #552D1E;
    }

    p {
        font-size: 15px;
        line-height: 140.62%;
        /* or 25px */

        text-align: center;

        /* grey */

        color: #778899;
    }

    @media (max-width: 768px){
        margin: 3rem 0rem;
        width: 100%;
        padding: 2rem 0.5rem;
    }

`