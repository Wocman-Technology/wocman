import styled from 'styled-components';


const regularSection = ({regular}) => {

    return regular ? "margin-top: 7rem" : "margin-top: 14rem"
}


export const HeadingWrapper = styled.h2`
    font-weight: 600;
    font-size: 24px;
    line-height: 132.83%;
    margin: 0 auto;
    text-align: center;
    /* identical to box height, or 32px */

    display: block;
    align-items: center;
    text-align: center;
    text-transform: capitalize;

    /* brown */
    color: #552D1E;
    ${regularSection}

    @media (max-width: 768px){
        margin-top: 7rem; 
    }
    `