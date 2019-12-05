import styled from 'styled-components';


export const WorksOnDemandWrapper = styled.section`
    width: 90%;
    margin: 5rem auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-content: center;
    grid-column-gap: 4rem;
     @media (max-width: 768px){
     grid-template-columns: 1fr;
     grid-row-gap: 7rem;
     padding: 0 3rem;
 }
`