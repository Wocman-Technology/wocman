import styled from 'styled-components';

export const TopRatedJobsWrapper = styled.section`
    width: 90%;
    margin: 5rem auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-content: center;
    /* grid-column-gap: 7rem; */
 @media (max-width: 768px){
     grid-template-columns: 1fr;
     padding: 0 3rem;
 }

 @media (min-width: 768px) and (max-width: 1100px) {
        grid-template-columns: 1fr 1fr;
    }

`