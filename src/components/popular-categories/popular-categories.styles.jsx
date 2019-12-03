import styled from 'styled-components';


export const HeadingWrapper = styled.h2`
    font-weight: 600;
    font-size: 24px;
    line-height: 132.83%;
    margin: 0 auto;
    text-align: center;
    margin-top: 14rem;
    
    /* identical to box height, or 32px */

    display: block;
    align-items: center;
    text-align: center;
    text-transform: capitalize;

    /* brown */

    color: #552D1E;

    @media (max-width: 768px){
        margin-top: 7rem; 
    }
    `

export const PopularCaregoriesWrapper = styled.section`
    margin-top: 4rem;
    display: grid;
    grid-template-columns: repeat(3, 300px);
    padding: 0 3rem;
    justify-content: space-around;

    @media (max-width: 768px){
        grid-template-columns: 1fr;
        padding: 0 2rem;
        text-align: center;
    }

`